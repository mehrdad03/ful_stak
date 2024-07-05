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
use App\Models\Story;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Jenssegers\Agent\Agent;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

class Index extends Component
{
    use WithFileUploads;

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
    public $latestStory = false;

    public function mount(Course $course): void
    {
        $agent = new Agent();
        $agent->isMobile();
        if ($agent->isMobile()) {
            $this->mobile = true;
        }


        $this->course = $course->load('sections.sectionLectures.video', 'category:id,title,url_slug');
        $this->lecturesCount = $course->lectures->count();
        $this->sameCourses = Course::query()
            ->where('category_id', $this->course->category_id)
            ->select('id', 'title', 'short_description', 'url_slug')->get();
        $this->courseTotalDuration = CourseSectionLecture::query()
            ->where('course_id', $this->course->id)
            ->sum('duration');


        $this->checkPurchase = OrderItem::query()
            ->where([
                'user_id' => Auth::id(),
                'course_id' => $this->course->id,
                'pay_status' => true
            ])->exists();

        $this->progress = CourseUserProgress::query()->where([
            'user_id' => Auth::id(),
            'course_id' => $course->id,
        ])->pluck('progress')->first();

        $this->updateStudents();

        $this->checkLatestStory();


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


    public function addToBasket(Basket $basket): void
    {
        $basket = $basket->addToBasket($this->course->id);
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

    public function updateStudents()
    {

        $currentDate = date('Y-m-d');

        // کلیدها برای ذخیره تعداد دانشجویان و تاریخ آخرین به‌روزرسانی
        $studentsCountKey = 'students_count_' . $this->course->id;
        $lastUpdateDateKey = 'last_update_date_' . $this->course->id;

        // اگر تاریخ قبلی ذخیره نشده یا متفاوت با تاریخ فعلی است
        if (!Session::has($lastUpdateDateKey) || Session::get($lastUpdateDateKey) !== $currentDate) {
            // تعداد دانشجویان فعلی را دریافت کنید
            $this->studentsCount = Session::get($studentsCountKey, 0);

            // اضافه کردن یک عدد تصادفی بین 1 تا 10 به تعداد دانشجویان
            $this->studentsCount += rand(10, 20);

            // ذخیره تعداد جدید دانشجویان و تاریخ به‌روزرسانی
            Session::put($studentsCountKey, $this->studentsCount);
            Session::put($lastUpdateDateKey, $currentDate);
        } else {
            $this->studentsCount = Session::get($studentsCountKey);
        }
    }

    public function getLectureId($lectureId)
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

    public function getAdjacentLecturePaths()
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

    public function goToNextLecture()
    {


        $this->dispatch('adjacentVideoPath', config('app.ftp_url') . $this->nextLecture);

    }

    public function goToPreviousLecture()
    {
        $this->dispatch('adjacentVideoPath', config('app.ftp_url') . $this->previousLecture);


    }

    public function completeLesson(CourseUserProgress $courseUserProgress, LectureUser $lectureUser)
    {

        $userId = Auth::id();
        $courseId = $this->course->id;
        $lectures = $this->lecturesCount;


        $this->progress = $courseUserProgress->submit($userId, $courseId, $lectures);

        $lectureUser->submit($this->lectureId, $courseId);

        $this->dispatch('completeLesson', 'جلسه تکمیل شد');


        $this->lessonCompleted = true;
    }


    /*upload story*/

    public function uploadStory(Request $request)
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
        Session::put('fileName', $fileName . '.webp');

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


            //$file->storeAs('livewire-tmp', $file->hashName());


        }
    }

    public function addStory($formData, Story $story)
    {
        //شرط if صرفا برای زمانی هست هکر جاوااسکریپت رو غرفعال کنه
        // و بخواد آپلود فایل سنگین انجام بده تا پدر سرور رو در بیاره
        $filepond = Session::get('filepond');

        if ($filepond / 1024 < 51200) {

            $validator = Validator::make($formData, [
                'title' => 'nullable|string|min:5|max:50',

            ], [
                '*.required' => 'فیلد ضروری',
                'title.max' => 'حداکثر تعداد کاراکتر : 50',
                'title.min' => 'حداقل تعداد کاراکتر : 10',
            ]);


            $validator->validate();
            $this->resetValidation();
            $story->addStory($formData, $this->course->id);

        } else {
            dd('بیلاخ');
        }


    }

    public function checkLatestStory()
    {
        $this->latestStory = Story::query()->where([
            'user_id' => Auth::id(),
            'status' => false
        ])->latest()->exists();

    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $checkCourseInBasket = Basket::query()->where([
            'course_id' => $this->course->id,
            'user_id' => Auth::id(),
        ])->exists();


        $comments = Comment::query()
            ->where([
                'course_id' => $this->course->id,
                'status' => true,
                'comment_id' => 0,
            ])
            ->with('answers', function ($query) {
                $query->where('status', true);
            }, 'user:id,name,picture')
            ->latest()
            ->get();

        return view('livewire.client.course.index', [
            'comments' => $comments,
            'checkCourseInBasket' => $checkCourseInBasket
        ]);
    }
}
