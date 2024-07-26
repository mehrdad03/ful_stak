<?php

namespace App\Livewire\Client\Course;

use App\Models\Basket;
use App\Models\Comment;
use App\Models\Course;
use App\Models\CourseSectionLecture;
use App\Models\CourseUserProgress;
use App\Models\LectureUser;
use App\Models\Media;
use App\Models\OrderItem;
use App\Models\RequirementCourse;
use App\Models\SeoItem;
use App\Models\Story;
use Artesaos\SEOTools\Traits\SEOTools;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Jenssegers\Agent\Agent;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads, SEOTools, WithPagination;

    public $course;
    public $sameCourses;
    public $courseTotalDuration;
    public $lecturesCount;
    public $checkPurchase;

    //after purchase
    public $videoPath = '';

    public $studentsCount;

    public $lectureId;

    public $lessonCompleted = false;
    public $progress = 0;

    public $previousLecture;
    public $nextLecture;

    public $mobile = false;

    //upload story properties
    public $firstStory;
    public $otherStories = [];
    public $latestStory = false;

    //free lectures properties
    public $freeLectures = [];


    // for pagination
    public $page = 1;
    protected $queryString = ['page'];

    public function updatingPage($value): void
    {
        $this->page = $value;
    }

    public function mount(Course $course): void
    {
        $this->mobile = (new Agent())->isMobile();

        $this->course = Cache::remember("course_{$course->id}", 3600, function () use ($course) {
            return $course->load([
                'sections.sectionLectures.video',
                'category:id,title,url_slug',
                'requirementsCourses.course' => function ($query) {
                    $query->select('id', 'title', 'price', 'short_description', 'url_slug')->with('coverImage');
                }
            ]);
        });


        $this->lecturesCount($course);
        $this->courseTotalDuration($course->id);
        $this->checkPurchase();
        $this->userprogress($course->id);
        $this->updateStudents();
        $this->checkLatestStory();
        $this->getCourseStories();
        $this->seoConfing();
        $this->freeLectures();
    }

    public function lecturesCount($course)
    {
        $this->lecturesCount = Cache::remember("course_lectures_count_{$course->id}", 3600, function () use ($course) {
            return $course->lectures->count();
        });


    }

    public function courseTotalDuration($courseId)
    {
        $this->courseTotalDuration = CourseSectionLecture::query()
            ->where('course_id', $courseId)
            ->sum('duration');
    }

    public function checkPurchase()
    {

        $this->checkPurchase = Cache::remember("purchase_check_{$this->course->id}", 3600, function () {
            return OrderItem::query()
                ->where([
                    'user_id' => Auth::id(),
                    'course_id' => $this->course->id,
                    'pay_status' => true
                ])->exists();
        });

    }

    public function userProgress()
    {
        $this->progress = Cache::remember("course_progress_" . Auth::id() . "_" . $this->course->id, 3600, function () {
            return CourseUserProgress::query()->where([
                'user_id' => Auth::id(),
                'course_id' => $this->course->id,
            ])->pluck('progress')->first();
        });


    }

    public function freeLectures()
    {
        $this->freeLectures = Cache::remember("free_lectures_course_{$this->course->id}", 3600, function () {
            return CourseSectionLecture::query()
                ->where([
                    'free' => true,
                    'course_id' => $this->course->id,
                ])
                ->with('video')
                ->get();
        });

    }

    public function seoConfing()
    {
        $courseSeoCacheKey = "course_seo_{$this->course->id}";

        $courseSeo = Cache::remember($courseSeoCacheKey, 3600, function () {
            return SeoItem::query()
                ->where('ref_id', $this->course->id)
                ->select('id', 'meta_name', 'meta_description')
                ->first();
        });

        if ($courseSeo) {
            $this->seo()
                ->setTitle($courseSeo->meta_name)
                ->setDescription($courseSeo->meta_description);
        }
    }


    /**
     * @throws ValidationException
     */
    public function submitCourseComment($formData, Comment $comment): void
    {
        $validator = Validator::make($formData, [
            'comment' => 'required|min:10|max: 700',
        ], [
            '*.required' => 'فیلد ضروری',
            'comment.max' => 'حداکثر تعداد کاراکتر : 700',
            'comment.min' => 'حداقل تعداد کاراکتر : 10',

        ]);

        $validator->validate();
        $this->resetValidation();

        $comment->submitCourseComment($formData, $this->course->id);
        session()->flash('message', 'نظر شما با موفقیت ثبت شد بعد از تایید نمایش داده خواهد شد!');


    }

    /**
     * @throws ValidationException
     */
    public function submitCourseCommentAnswer($formData, $comment_id, Comment $comment): void
    {

        $formData['comment_id'] = $comment_id;

        $validator = Validator::make($formData, [
            'answer' => 'required|min:10|max: 700',
            'comment_id' => 'required|exists:comments,id',
        ], [
            '*.required' => 'فیلد ضروری',
            'answer.max' => 'حداکثر تعداد کاراکتر : 700',
            'answer.min' => 'حداقل تعداد کاراکتر : 10',
            'answer.exists' => 'نامعتبر',

        ]);

        $validator->validate();
        $this->resetValidation();

        //session output is
        $comment->submitCourseCommentAnswer($formData, $comment_id, $this->course->id);
        session()->flash('answer_message', 'نظر شما با موفقیت ثبت شد بعد از تایید نمایش داده خواهد شد!');


    }


    public function addToBasket($requirementsCourses, Basket $basket): void
    {


        $allRequirementCourses = $this->getRequirementsCourses()->pluck('prerequisite_course_id')->toArray();


        if ($requirementsCourses === 'all') {

//برای زمانی که کل دور های پیش نیاز به سبد خرید اضافه میشن

            foreach ($allRequirementCourses as $item) {
                $basket = $basket->addToBasket($item);
            }
            $this->redirect('/cart', navigate: true);

        } else if ($requirementsCourses === 'null') {

            //برای زمانی که دوره اصلی به سبد خرید اضاف میشه

            $basket = $basket->addToBasket($this->course->id);

            if (count($allRequirementCourses) == 0) {
                $this->redirect('/cart', navigate: true);
            }

        } else {

            //برای زمانی که یکی از دوره های پیش نیاز به سبد خرید اضاف میشه

            $courseId = Course::query()->where('url_slug', $requirementsCourses)->pluck('id')->first();
            $basket = $basket->addToBasket($courseId);

        }


        $this->dispatch('update-basket', count: $basket->count());

    }

    /*public function videoEnded()
    {

        $userId = Auth::id();
        $courseId = $this->course->id;
        $lectures = $this->course->lectures->count();

        // پیدا کردن یا ایجاد رکورد در جدول course_user_progress
        $progressRecord = CourseUserProgress::query()->updateOrCreate(
            ['user_id' => $userId, 'course_id' => $courseId],
            ['total_lessons' => $lectures]
        );
        // به‌روزرسانی تعداد درس‌های تکمیل‌شده
        $progressRecord->completed_lessons += 1;
        $progressRecord->progress = ($progressRecord->completed_lessons / $progressRecord->total_lessons) * 100;
        $progressRecord->save();

        $this->lessonCompleted = true;

    }*/

    /*public function videoModal($videoPath)
    {
        $this->videoPath = $videoPath;
        $this->dispatch('videoModal', $videoPath);
    }*/

    public function updateStudents(): void
    {

        // چک کردن وجود سیشن
        if (!Session::has('student_count')) {
            Session::put('student_count', 61);
            Session::put('last_update', now()->format('Y-m-d H:i:s'));
            Session::put('update_count', 0);
        }

        $currentCount = Session::get('student_count');
        $lastUpdate = Session::get('last_update');
        $updateCount = Session::get('update_count');
        $today = now()->format('Y-m-d');

        // محاسبه زمان فعلی و زمان آخرین به‌روزرسانی
        $lastUpdateDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lastUpdate);
        $now = \Carbon\Carbon::now();

        // بررسی اگر روز جدیدی باشد، تعداد به‌روزرسانی‌ها را صفر کنید
        if ($lastUpdateDate->format('Y-m-d') !== $today) {
            $updateCount = 0;
        }

        // چک کردن تعداد به‌روزرسانی‌ها در طول روز با توجه به تایم های رندوم
        if ($updateCount < 6) {
            $randomInterval = rand(1, 5); // بازه زمانی رندوم بین 1 تا 5 ساعت
            $nextUpdate = $lastUpdateDate->copy()->addHours($randomInterval);

            if ($now->gte($nextUpdate)) {
                $randomIncrease = rand(1, 10); // مقدار رندوم
                $newCount = $currentCount + $randomIncrease;
                $updateCount++;

                Session::put('student_count', $newCount);
                Session::put('last_update', now()->format('Y-m-d H:i:s'));
                Session::put('update_count', $updateCount);
            } else {
                $newCount = $currentCount;
            }
        } else {
            $newCount = $currentCount;
        }
        $this->studentsCount = $newCount;
    }

    public function getLectureId($lectureId): void
    {
        $this->lessonCompleted = false;
        $lectureCheck = CourseSectionLecture::query()->where('id', $lectureId)->exists();
        if ($lectureCheck) {
            $this->lectureId = $lectureId;
            // $this->getAdjacentLecturePaths();
        }


        //check if this lessens seen or not
        $completeLessen = LectureUser::query()->where([
            'user_id' => Auth::id(),
            'course_id' => $this->course->id,
            'course_section_lecture_id' => $this->lectureId,
        ])->exists();

        if ($completeLessen) {
            $this->lessonCompleted = true;
        }


    }

    public function getAdjacentLecturePaths(): void
    {
        $courseId = $this->course->id;
        // پیدا کردن درس قبلی
        $this->previousLecture = Media::query()->where('course_id', $courseId)
            ->where('id', '<', $this->lectureId)
            ->orderBy('id', 'desc')
            ->pluck('path')
            ->first();
        // پیدا کردن درس بعدی
        $this->nextLecture = Media::query()->where('course_id', $courseId)
            ->where('id', '>', $this->lectureId)
            ->orderBy('id', 'asc')
            ->pluck('path')
            ->first();

    }

    public function goToNextLecture(): void
    {


        $this->dispatch('adjacentVideoPath', config('app.ftp_url') . $this->nextLecture);

    }

    public function goToPreviousLecture(): void
    {
        $this->dispatch('adjacentVideoPath', config('app.ftp_url') . $this->previousLecture);


    }

    public function completeLesson(CourseUserProgress $courseUserProgress, LectureUser $lectureUser): void
    {

        $userId = Auth::id();
        $courseId = $this->course->id;
        $lectures = $this->lecturesCount;


        $this->progress = $courseUserProgress->submit($userId, $courseId, $lectures);

        $lectureUser->submit($this->lectureId, $courseId);

        $this->dispatch('completeLesson', 'جلسه تکمیل شد');


        $this->lessonCompleted = true;
    }

    public function getRequirementsCourses(): \Illuminate\Database\Eloquent\Collection|array
    {
        return RequirementCourse::query()
            ->where('course_id', $this->course->id)
            ->with('course:id,title,url_slug')
            ->get();
    }


    // stories functions

    public function deleteTempleFile(): void
    {
        Session::forget('filepond');
    }

    public function uploadTempFileStory(Request $request): void
    {


        $request->validate([
            'filepond' => 'required|file|max:51200', // حداکثر اندازه 50 مگابایت (51200 کیلوبایت)
        ]);


        $file = $request->file('filepond');

        //برای زمانیک هکر جاوااسکریپت رو غرفعال کنه
        Session::put('filepond', $file->getSize());
        // و بخواد آپلود فایل سنگین انجام بده تا پدر سرور رو در بیاره


        $fileName = pathinfo($file->hashName(), PATHINFO_FILENAME);
        $extension = $file->extension();
        /*Session::put('fileName', $fileName . '.webp');*/

        if ($request->hasFile('filepond')) {

            if ($extension != 'mp4') {

                $manager = new ImageManager(new Driver());
                $manager->read($file)
                    ->toWebp(1)
                    ->save(storage_path('app/livewire-tmp/' . $fileName . '.webp'));

                Session::put('fileName', $fileName . '.webp');

            } else {
                $file->storeAs('livewire-tmp', $file->hashName());

                Session::put('fileName', $file->hashName());
            }

            $this->dispatch('fileUploaded');
            //$file->storeAs('livewire-tmp', $file->hashName());


        }
    }

    public function addStory($formData, Story $story): void
    {
        //شرط if صرفا برای زمانی هست هکر جاوااسکریپت رو غرفعال کنه
        // و بخواد آپلود فایل سنگین انجام بده تا پدر سرور رو در بیاره
        $filepond = Session::get('filepond');


        $formData['fileSize'] = $filepond;

        if ($filepond / 1024 < 51200) {

            $validator = Validator::make($formData, [
                'fileSize' => 'required',
                'title' => 'required|string|min:5|max:50',

            ], [
                'title.required' => 'عنوان اجباری است!',
                'fileSize.required' => ' فایل آپلود نشده و یا حجم بیشتر از 50MB دارد!',
                'title.max' => 'حداکثر تعداد کاراکتر : 20',
                'title.min' => 'حداقل تعداد کاراکتر : 5',
            ]);

            $validator->validate();
            $this->resetValidation();

            $story->addStory($formData, $this->course->id);
            $this->dispatch('storyIsUploaded');

            Session::forget('filepond');


            /*فعال کردم پیغام در صف انتظار بودن آخرین استوری*/
            $this->latestStory = true;

        } else {
            dd('بیلاخ');
        }


    }

    public function checkLatestStory(): void
    {
        $latestStory = Story::query()->where([
            'user_id' => Auth::id(),
            'status' => false
        ])->latest()->first();

        if ($latestStory !== null) {
            $this->latestStory = true;
        } else {
            $this->latestStory = false;
        }


    }

    public function getCourseStories(): void
    {
        $firstStoryCacheKey = "first_story_course_{$this->course->id}";
        $this->firstStory = Cache::remember($firstStoryCacheKey, 3600, function () {
            return Story::query()
                ->where('status', true)
                ->where('course_id', $this->course->id)
                ->where('user_id', 1)
                ->with('user', 'media')
                ->latest()
                ->first();
        });

        $otherStoriesCacheKey = "other_stories_course_{$this->course->id}";
        $this->otherStories = Cache::remember($otherStoriesCacheKey, 3600, function () {
            $firstStory = $this->firstStory;
            return Story::query()
                ->where('status', true)
                ->where('course_id', $this->course->id)
                ->when($firstStory, function ($query) use ($firstStory) {
                    return $query->where('id', '!=', $firstStory->id);
                })
                ->latest()
                ->with('user', 'media')
                ->limit(10)
                ->get();
        });

    }

    public function submitStoryView($videoSrc): void
    {

        //در $videoSrc چون همرا باهاست دانلود میاد
        // باید دامنه هسات دانلود رو حذف کنیم بعد
        //در جدول media دنباش بگردیم

        $storyId = Media::query()->where([
            'path' => substr($videoSrc, strpos($videoSrc, 'courses/')),
            'type' => 'story',
            'course_id' => $this->course->id,
        ])
            ->pluck('lecture_id')
            ->firstOrFail();

        Story::query()->where('id', $storyId)->increment('view');
    }

    // stories functions

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $checkCourseInBasket = Basket::query()->where([
            'course_id' => $this->course->id,
            'user_id' => Auth::id(),
        ])->exists();

        $comments = Cache::remember("course_comments_{$this->course->id}_page_{$this->page}", 3600, function () {
            return Comment::query()
                ->where([
                    'course_id' => $this->course->id,
                    'status' => true,
                    'comment_id' => 0,
                ])
                ->with(['answers' => function ($query) {
                    $query->where('status', true)->with('user');
                }, 'user:id,name,picture'])
                ->latest()
                ->paginate(10, ['*'], 'page', $this->page); // اضافه کردن پارامترهای صفحه‌بندی
        });

        return view('livewire.client.course.index', [
            'comments' => $comments,
            'checkCourseInBasket' => $checkCourseInBasket
        ]);
    }
}
