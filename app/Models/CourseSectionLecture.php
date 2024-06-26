<?php

namespace App\Models;

use App\Trait\UploadFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;


class CourseSectionLecture extends Model
{
    use HasFactory, UploadFiles,SoftDeletes;

    protected $guarded = [];

    public function courseSection()
    {
        return $this->belongsTo(CourseSection::class);
    }

    public function saveLecture($formData, $lectureId, $sectionId, $courseId, $oldLectureVideo)
    {
        DB::transaction(function () use ($formData, $lectureId, $courseId, $sectionId, $oldLectureVideo) {

            $video = $formData['video'];
            $newLecture = $this->lectureCreateOrUpdate($formData, $lectureId, $sectionId, $courseId);

            if ($video) {

               $this->uploadFile($courseId, $oldLectureVideo, $video, 'lecture-video', $sectionId, $newLecture->id);

               $this->getVideoDurationAndUpdateTable($newLecture->id,$video->getRealPath());

            }

        });


    }

    public function lectureCreateOrUpdate($formData, $lectureId, $sectionId, $courseId)
    {
        return CourseSectionLecture::query()->updateOrCreate(
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

    public function removeOldVideo($lectureId)
    {
        CourseSectionLecture::query()->where([
            'id' => $lectureId,

        ])->first()->delete();

    }

    public function getVideoDurationAndUpdateTable($lectureId, $path)
    {


        $media = FFMpeg::fromDisk('public')
            ->open( $path);
       /* $media = FFMpeg::fromDisk('ftp')
            ->open( $path);*/

        $durationInSeconds = $media->getDurationInSeconds(); // returns an int


        CourseSectionLecture::query()->where([
            'id' => $lectureId,

        ])->update([
            'duration' => $durationInSeconds,
        ]);

    }

    public function video()
    {
        return $this->belongsTo(Media::class, 'id','lecture_id');

    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
