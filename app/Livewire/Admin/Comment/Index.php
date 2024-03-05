<?php

namespace App\Livewire\Admin\Comment;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function changeStatus($commentId, $userId): void
    {


        $comment = Comment::query()->where([
            'user_id' => $userId,
            'id' => $commentId,
        ])->first();


        if ($comment->status) {
            $comment->update(['status' => false]);
        } else {
            $comment->update(['status' => true]);
        }

    }

    public function render()
    {
        $comments = Comment::query()
            ->where('comment_id','=',0)
            ->with('user', 'course:url_slug,id,title','answers')
            ->latest()
            ->paginate(10);

        return view('livewire.admin.comment.index', [
            'comments' => $comments
        ])->layout('layouts.app-admin');
    }
}
