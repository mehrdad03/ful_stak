<?php

namespace App\Models;

use FFMpeg\Format\Video\X264;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use ProtoneMedia\LaravelFFMpeg\Exporters\HLSExporter;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;


class CourseSectionLecture extends Model
{
    use HasFactory;

    public function convertVideo($video, $courseId, $lectureTitle, $lectureId)
    {

        DB::transaction(function () use ($video, $courseId, $lectureTitle, $lectureId) {

            $path = 'videos/' . $courseId;
            $videoName = $lectureTitle . '_' . time();

            $videoPath = $video->store($path);

            $encryptionKey = HLSExporter::generateEncryptionKey();


            //get video duration
            $media = FFMpeg::open($videoPath);
            $durationInSeconds = $media->getDurationInSeconds(); // returns an int



            $savePath = $path . '/' . $videoName . '.m3u8';
            FFMpeg::open($videoPath)
                ->exportForHLS()
                ->withEncryptionKey($encryptionKey)
                ->addFormat(new X264('aac', 'libx264'))
                ->toDisk('ftp')
                ->save($savePath);

             //delete video from local
          //  Storage::delete($videoPath);


            CourseLectureVideo::query()->updateOrCreate(
                [
                    'course_section_lecture_id' => $lectureId,

                ], [
                    'duration' => $durationInSeconds,
                    'path' => config('app.ftp_url') . '/' . $savePath,
                ]
            );
        });

    }

    public function courseSection()
    {
        return $this->belongsTo(CourseSection::class);
    }
}
