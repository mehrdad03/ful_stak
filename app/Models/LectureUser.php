<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class LectureUser extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submit($lectureId,$courseId)
    {
        LectureUser::query()->updateOrCreate(
            [
                'user_id' => Auth::id(),
                'course_section_lecture_id' => $lectureId,
                'course_id' => $courseId,
            ]
        );
    }
}
