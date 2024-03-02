<?php

namespace App\Models;

use FFMpeg\Format\Video\X264;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Exporters\HLSExporter;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Symfony\Component\Process\Process;


class CourseSectionLecture extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function courseSection()
    {
        return $this->belongsTo(CourseSection::class);
    }

    public function saveLecture($formData, $lectureId,$sectionId,$courseId)
    {


        CourseSectionLecture::query()->updateOrCreate(
            [
                'id' => $lectureId
            ]
            ,
            [
                'title' => $formData['title'],
                'course_section_id' => $sectionId,
                'course_id' => $courseId,
            ]
        );
    }

}
