<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function answer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Comment::class, 'id','comment_id');

    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);

    }

    public function submitCourseComment($formData, $courseId): void
    {
        //session output is : array:1 [0 => 2]
        Comment::query()->create([
            'comment' => $formData['comment'],
            'course_id' => $courseId,
            'user_id' => Auth::id(),
        ]);
    }
}
