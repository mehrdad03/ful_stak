<?php

namespace App\Http\Controllers;

use App\Models\CourseSectionLecture;
use App\Models\Media;
use FFMpeg\Format\Video\X264;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class uploadVideo extends Controller
{
    function uploadVideo(Request $request, $courseId = null, $lectureId = null, $sectionId = null): \Illuminate\Http\RedirectResponse
    {

        $video = $request->file('video');
        $videoName = Str::random(10) . '_' . time();

        if ($sectionId) {
            DB::transaction(function () use ($video, $courseId, $lectureId, $sectionId, $videoName) {

                $path = 'course/videos/' . $courseId;
                $videoPath = Storage::disk('local')->put($path, $video);

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
        } else {
            DB::transaction(function () use ($request, $video, $courseId, $videoName) {

                $path = '/course/' . $courseId . '/cover-video';
                //delete old video hls files
                File::deleteDirectory(public_path($path));

                $videoPath = Storage::disk('ftp')->put($path, $video);
                $savePath = $path . '/' . $videoName . '.m3u8';

                //delete video from local
                File::delete(public_path($videoPath));
                $this->insertVideoToMediaTable($savePath, $courseId);
            });
        }


        return redirect()->back();


    }

    public function insertVideoToMediaTable($path, $courseId): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder
    {
        return Media::query()->updateOrCreate(
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
