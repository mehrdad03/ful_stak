<?php

namespace App\Models;

use FFMpeg\Format\Video\X264;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Exporters\HLSExporter;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class CourseSectionLecture extends Model
{
    use HasFactory;

    public function convertVideo($video, $courseId, $lectureTitle)
    {


        $path = 'public/videos/' . $courseId;

        $videoName = $lectureTitle . '_' . time();

        $videoPath = $video->store($path);

        $lowBitrate = (new X264)->setKiloBitrate(250);
        $midBitrate = (new X264)->setKiloBitrate(500);
        $highBitrate = (new X264)->setKiloBitrate(1000);

        $encryptionKey = HLSExporter::generateEncryptionKey();
        $savePath = $path . '/' . $videoName . '.m3u8';

        FFMpeg::open($videoPath)
            ->exportForHLS()
            ->withEncryptionKey($encryptionKey)
            ->addFormat($lowBitrate)
            ->addFormat($midBitrate)
            ->addFormat($highBitrate)
            ->save($savePath);

        Storage::delete($videoPath);

        CourseLectureVideo::query()->updateOrCreate(
            [

            ], [

            ]
        );

    }

    public function courseSection()
    {
        return $this->belongsTo(CourseSection::class);
    }
}
