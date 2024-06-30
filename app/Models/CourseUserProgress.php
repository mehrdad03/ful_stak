<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUserProgress extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submit($userId,$courseId,$lectures)
    {
        // پیدا کردن یا ایجاد رکورد در جدول course_user_progress
        $progressRecord = CourseUserProgress::query()->updateOrCreate(
            ['user_id' => $userId, 'course_id' => $courseId],
            ['total_lessons' => $lectures]
        );
        // به‌روزرسانی تعداد درس‌های تکمیل‌شده
        $progressRecord->completed_lessons += 1;
        $progressRecord->progress = ($progressRecord->completed_lessons / $progressRecord->total_lessons) * 100;
        $progressRecord->save();


    }
}
