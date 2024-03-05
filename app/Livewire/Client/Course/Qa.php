<?php

namespace App\Livewire\Client\Course;

use App\Models\Comment;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Qa extends Component
{

    public $comments;
    public $courseId;

    public function mount()
    {
        $this->comments = Comment::query()
            ->where([
                'course_id' => $this->courseId,
                'status' => true,
                'comment_id' => 0,
            ])
            ->with('answers',function ($query) {
                $query->where('status', true);
            }, 'user:id,name,picture')
            ->latest()
            ->get();

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

        //session output is
        $comment->submitCourseComment($formData, $this->courseId);

        session()->flash('message', 'نظر شما با موفقیت ثبت شد بعد از تایید نمایش داده خواهد شد!');


    }

    /**
     * @throws ValidationException
     */
    public function submitCourseCommentAnswer($formData, $comment_id, Comment $comment): void
    {

        $formData['comment_id']=$comment_id;

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
        $comment->submitCourseCommentAnswer($formData,$comment_id, $this->courseId);

        session()->flash('answer_message', 'نظر شما با موفقیت ثبت شد بعد از تایید نمایش داده خواهد شد!');


    }

    public function render()
    {
        return view('livewire.client.course.qa');
    }
}
