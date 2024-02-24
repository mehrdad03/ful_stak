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

    /*public function convertVideo($video, $courseId, $lectureTitle, $lectureId)
    {

        DB::transaction(function () use ($video, $courseId, $lectureTitle, $lectureId) {

            $path = 'public/videos/' . $courseId;
            $videoName = $lectureTitle . '_' . time();

            dd($video);
            $videoPath =  Storage::disk('local')->put($path,  $video);
           $videoPath = $video->store($path);



            //get video duration
            $media = FFMpeg::open($videoPath);
            $durationInSeconds = $media->getDurationInSeconds(); // returns an int



            $savePath = $path . '/' . $videoName . '.m3u8';
            FFMpeg::open($videoPath)
                ->exportForHLS()
                ->addFormat(new X264('aac', 'libx264'))
                ->toDisk('ftp')
                ->save($savePath);

             //delete video from local
           Storage::delete($videoPath);


            CourseLectureVideo::query()->updateOrCreate(
                [
                    'course_section_lecture_id' => $lectureId,

                ], [
                    'duration' => $durationInSeconds,
                    'path' => config('app.ftp_url') . '/' . $savePath,
                ]
            );
        });

    }*/

    public function courseSection()
    {
        return $this->belongsTo(CourseSection::class);
    }

    public function saveLecture($formData, $lectureId,$section_id)
    {
        CourseSectionLecture::query()->updateOrCreate(
            [
                'id' => $lectureId
            ]
            ,
            [
                'title' => $formData['title'],
                'course_section_id' => $section_id,
            ]
        );
    }
    public function sectionLectureVideos()
    {
        return $this->belongsTo(CourseLectureVideo::class,'id','course_section_lecture_id' );
    }
}
