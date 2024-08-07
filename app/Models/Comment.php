<?php

namespace App\Models;

use App\Notifications\SendSmsNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function answer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Comment::class, 'id', 'comment_id');

    }

    public function answers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Comment::class)->latest();

    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);

    }

    public function course(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id');

    }

    public function submitCourseComment($formData, $courseId): void
    {
        $user = Auth::user();
        Comment::query()->create([
            'comment' => $formData['comment'],
            'course_id' => $courseId,
            'user_id' => $user->id,
        ]);

        /*if ($user->mobile) {
            $user->notify(new SendSmsNotification($user->mobile, 'submitComment', $user->name));
        }*/


    }

    public function submitCourseCommentAnswer($formData, $comment_id, $courseId): void
    {
        Comment::query()->create([
            'comment' => $formData['answer'],
            'course_id' => $courseId,
            'user_id' => Auth::id(),
            'comment_id' => $comment_id,
        ]);
    }

    public function submitAdminCommentAnswer($answer, $courseId, $commentId, $answerId): void
    {
        \App\Models\Comment::query()->updateOrCreate(
            [
                'id' => $answerId,
            ]
            ,
            [
                'comment' => $answer,
                'user_id' => Auth::guard('admin')->id(),
                'comment_id' => $commentId,
                'course_id' => $courseId,

            ]
        );
    }
}
