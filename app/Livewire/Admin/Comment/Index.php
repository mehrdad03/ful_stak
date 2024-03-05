<?php

namespace App\Livewire\Admin\Comment;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function changeStatus($commentId): void
    {

        $comment = Comment::query()->where([
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
            ->where('comment_id', '=', 0)
            ->with('user', 'course:url_slug,id,title', 'answers')
            ->latest();


        if ($this->search) {
            $comments = $comments
                ->Where('comment', 'like', '%' . $this->search . '%')
                ->orWhereHas('user', function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%');
                });
        }

        return view('livewire.admin.comment.index', [
            'comments' => $comments->paginate(10)
        ])->layout('layouts.app-admin');
    }
}
