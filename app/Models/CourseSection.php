<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function saveSection($formData, $sectionId, $course_id)
    {
        CourseSection::query()->updateOrCreate(
            [
                'id' => $sectionId
            ]
            ,
            [
                'title' => $formData['title'],
                'course_id' => $course_id,
            ]
        );
    }


}

