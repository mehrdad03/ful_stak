<?php

namespace App\Livewire\Admin\Course;

use App\Models\CourseSectionLecture;
use FFMpeg\Format\Video\X264;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use ProtoneMedia\LaravelFFMpeg\Exporters\HLSExporter;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class Lecture extends Component
{
    use WithFileUploads;

    public $lectures;
    public $video;


    public function mount($sectionId)
    {

        $this->lectures = CourseSectionLecture::query()->where('id', $sectionId)->get();


    }

    public function convertVideo($formData)
    {

        dd($formData);
        $validator = Validator::make($formData, [
            'video' => 'required|mimes:mp4,avi,flv,wmv', // 50KB Max
        ], [
            '*.required' => 'فیلد ضروری',
            'categoryThumbnail.image' => 'پسوندهای قابل قبول: webp ,jpeg ,jpg , png , gif',
            'categoryThumbnail.max' => 'حجم مجاز 100 کیلوبایت',
        ]);

        $validator->validate();
        $this->resetValidation();

         $videoPath = $request->file('video')->store('public/videos');

        // Define different qualities
        $qualities = ['480p', '720p', '1080p'];


        // Storage::delete($videoPath);

        $lowBitrate = (new X264)->setKiloBitrate(250);
        $midBitrate = (new X264)->setKiloBitrate(500);
        $highBitrate = (new X264)->setKiloBitrate(1000);

        $encryptionKey = HLSExporter::generateEncryptionKey();

        FFMpeg::open('/videos/test.mp4')
            ->exportForHLS()
            ->withEncryptionKey($encryptionKey)
            ->addFormat($lowBitrate)
            ->addFormat($midBitrate)
            ->addFormat($highBitrate)
            ->save('public/videos/adaptive_steve.m3u8');
    }

    public function render()
    {

        return view('livewire.admin.course.lecture')->layout('layouts.app-admin');
    }
}
