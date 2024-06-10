<?php

namespace App\Livewire\Client\Course;

use App\Models\Basket;
use App\Models\Comment;
use App\Models\Course;
use App\Models\CourseSectionLecture;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Index extends Component
{
    public $course;
    public $sameCourses;
    public $courseTotalDuration;
    public $checkPurchase;

    //after purchase
    public $videoPath = '';

    public function mount(Course $course): void
    {
        $this->course = $course->load('sections.sectionLectures.video','category:id,title');
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

    public function videoModal($videoPath)
    {
        $this->videoPath = $videoPath;
        $this->dispatch('videoModal', path: $videoPath);
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
