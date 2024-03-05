<?php

namespace App\Livewire\Admin\Comment;

use App\Models\Comment;
use App\Models\Course;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Answer extends Component
{
    public $comment,$description;

    public function mount(Comment $comment): void
    {
        $this->comment = $comment->load('answer','course');
    }

    /**
     * @throws ValidationException
     */
    public function submit($formData, Comment $comment): void
    {

        if ($this->description == null or $this->description == '') {

            $formData['editor1'] = @$this->comment->answer->comment;
        } else {
            $formData['editor1'] = $this->description;

        }

        $validator = Validator::make($formData, [
            'editor1' => 'required|min:10',
        ], [
            '*.required' => 'فیلد ضروری',
            'editor1.min' => 'حداقل تعداد کاراکترهای مجاز: 10',
        ]);

        $validator->validate();
        $this->resetValidation();


        if (!$this->comment->answer){
            $answerId=0;
        }else{
            $answerId=$this->comment->answer->id;
        }

        $comment->submitAdminCommentAnswer($formData['editor1'],$this->comment->course_id, $this->comment->id,$answerId);
        session()->flash('message', 'پاسخ با موفقیت ثبت شد!');
        $this->redirect('/admin/comments',navigate: true);

    }
    public function render()
    {
        return view('livewire.admin.comment.answer')
            ->layout('layouts.app-admin');
    }
}
