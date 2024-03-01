<?php

namespace App\Http\Controllers;

use App\Models\CourseSectionLecture;
use FFMpeg\Format\Video\X264;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class uploadVideo extends Controller
{
    function uploadVideo(Request $request, $courseId, $lectureId,$sectionId)
    {

        $video = $request->file('video');

        DB::transaction(function () use ($video, $courseId, $lectureId,$sectionId) {

            $path = 'videos/' . $courseId;
            $videoName = Str::random(10) . '_' . time();

            /*dd($video);*/
            $videoPath = Storage::disk('local')->put($path, $video);
            //       $videoPath = $video->store($path);


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

            CourseSectionLecture::query()->updateOrCreate(
                [
                    'id' => $lectureId,

                ], [

                    'course_section_id' => $sectionId,
                    'course_id' => $courseId,
                    'video_path' => config('app.ftp_url') . '/' . $savePath,
                    'duration' => $durationInSeconds,
                ]
            );
        });


    }



}
