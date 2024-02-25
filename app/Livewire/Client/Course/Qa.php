<?php

namespace App\Livewire\Client\Course;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Qa extends Component
{
    public $cSlug;
    public function submitCourseComment($formData,Comment $comment)
    {
        $validator = Validator::make($formData, [
            'comment' => 'required|min:10|max: 100',
        ], [
            '*.required' => 'فیلد ضروری',
            'comment.max' => 'حداکثر تعداد کاراکتر : 50',
            'comment.min' => 'حداقل تعداد کاراکتر : 10',

        ]);

        $validator->validate();
        $this->resetValidation();

        $comment->submitCourseComment($formData,$this->cSlug);



    }
    public function render()
    {
        return view('livewire.client.course.qa');
    }
}
