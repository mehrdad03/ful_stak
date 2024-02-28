<?php

namespace App\Livewire\Client\Course;

use App\Models\Comment;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Qa extends Component
{

    public $comments;

    public function mount()
    {
        $this->comments=Comment::query()
            ->where([
                'course_id'=>Session::get('courseId'),
                'status'=>true,
                'comment_id'=>0,
            ])
            ->with('answer','user:id,name,picture')
            ->get();


    }
    public function submitCourseComment($formData,Comment $comment)
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
        $comment->submitCourseComment($formData,Session::get('courseId'));

        session()->flash('message', 'نظر شما با موفقیت ثبت شد بعد از تایید نمایش داده خواهد شد!');




    }
    public function render()
    {
        return view('livewire.client.course.qa');
    }
}
