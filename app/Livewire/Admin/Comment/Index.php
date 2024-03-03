<?php

namespace App\Livewire\Admin\Comment;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $comments = Comment::query()->with('user','course:url_slug,id,title')->latest()->paginate(10);

        return view('livewire.admin.comment.index', [
            'comments' => $comments
        ])->layout('layouts.app-admin');
    }
}
