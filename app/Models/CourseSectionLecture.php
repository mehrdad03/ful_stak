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



        /*  DB::transaction(function () use ($formData, $lectureId, $sectionId, $courseId) {


              $path = '/courses/' . $courseId . '/videos/' . $sectionId;

              if ($video) {
                  $extension = $video->extension();
                  $videoName = Str::random(10) . '_' . time() . '.' . $extension;
                  $this->removeOldVideo($lectureId);


                  $storagePath = public_path() . $path;

                  if (!File::exists($storagePath)) {
                      File::makeDirectory($storagePath, 0777, true);
                  }

                  $video->storeAs($path, $videoName, 'public');

                  //get video duration
                  $media = FFMpeg::fromDisk('public')
                      ->open($path . '/' . $videoName);

                  $durationInSeconds = $media->getDurationInSeconds(); // returns an int


              }

              $this->lectureCreateOrUpdate($path . '/' . $videoName, $formData, $lectureId, $sectionId, $courseId, $durationInSeconds);


          });*/

        DB::transaction(function () use ($formData, $lectureId, $courseId, $sectionId, $oldLectureVideo) {

            $video = $formData['video'];
            $newLecture = $this->lectureCreateOrUpdate($formData, $lectureId, $sectionId, $courseId);


            if ($video) {


               $uploadedVideo= $this->uploadFile($courseId, $oldLectureVideo, $video, 'lecture-video', $sectionId, $newLecture->id);


                $this->getVideoDurationAndUpdateTable($newLecture->id,$uploadedVideo['path']);


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

//dd($path . '/' . $videoName);
        $media = FFMpeg::fromDisk('public')
            ->open( public_path().$path);

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
}
