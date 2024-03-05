<?php

namespace App\Livewire\Admin\Comment;

use App\Models\Comment;
use Livewire\Component;

class Answer extends Component
{
    public $comment;

    public function mount(Comment $comment)
    {
        $this->comment = $comment->load('answer','course');

    }

    public function render()
    {
        return view('livewire.admin.comment.answer')->layout('layouts.app-admin');
    }
}
