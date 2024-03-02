<?php

namespace App\Http\Controllers;

use App\Models\CourseSectionLecture;
use App\Models\Media;
use FFMpeg\Format\Video\X264;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class uploadVideo extends Controller
{
    function uploadVideo(Request $request, $courseId=null, $lectureId=null,$sectionId=null)
    {

        $video = $request->file('video');

        if ($sectionId){
            DB::transaction(function () use ($video, $courseId, $lectureId,$sectionId) {

                $path = 'course/videos/'.$courseId;
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
        }else{
            DB::transaction(function () use ($request,$video, $courseId) {




                $path = '/public/course/cover-video';
                $databasePath = '/storage/course/cover-video';

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
                $this->insertVideoToMediaTable($path . '/' . $videoPath, $courseId);
            });
        }



        return redirect()->back();


    }

    public function insertVideoToMediaTable($path, $courseId)
    {
        return \App\Models\Media::query()->updateOrCreate(
            [
                'course_id' => $courseId,
                'type' => 'cover-video',
            ],
            [
                'path' => $path,
            ]
        );
    }



}
