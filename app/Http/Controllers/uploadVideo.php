<?php

namespace App\Http\Controllers;

use App\Models\CourseSectionLecture;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class uploadVideo extends Controller
{
    function uploadVideo(Request $request, $courseId = null, $lectureId = null, $sectionId = null): \Illuminate\Http\RedirectResponse
    {

        $oldVideoPath = Media::query()->where([
            'course_id' => $courseId,
            'type' => 'cover-video',
        ])->pluck('path')->first();

        $video = $request->file('video');
        $extension = $video->extension();
        $videoName = Str::random(10) . '_' . time() . '.' . $extension;

        if ($sectionId) {
            DB::transaction(function () use ($video, $courseId, $lectureId, $sectionId, $videoName, $oldVideoPath) {

                $path = 'course/videos/' . $courseId;
                $videoPath = Storage::disk('local')->put($path, $video);

                //get video duration
                $media = FFMpeg::open($videoPath);
                $durationInSeconds = $media->getDurationInSeconds(); // returns an int

                $savePath = $path . '/' . $videoName . '.mp4';

                CourseSectionLecture::query()->updateOrCreate(
                    [
                        'id' => $lectureId,
                    ], [

                        'course_section_id' => $sectionId,
                        'course_id' => $courseId,
                        'video_path' => $savePath,
                        'duration' => $durationInSeconds,
                    ]
                );
            });
        } else {
            DB::transaction(function () use ($request, $video, $courseId, $videoName, $oldVideoPath) {



                $path = '/course/' . $courseId . '/cover-video';

                //delete old video files
                /* if ($oldVideoPath) {
                     Storage::disk('ftp')->delete($oldVideoPath);
                 }*/

                $savePath = $path . '/' . $videoName;
                //Storage::disk('ftp')->put($path,$video);
                $video->storeAs($path, $videoName, 'ftp');

                //  $this->insertVideoToMediaTable($savePath, $courseId);



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
