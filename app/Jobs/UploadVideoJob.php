<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeEncrypted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class UploadVideoJob implements ShouldQueue, ShouldBeEncrypted
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout = 3600;

    protected $tempFilePath;
    protected $driver;
    protected $storagePath;
    protected $fileName;
    protected $type;

    /**
     * Create a new job instance.
     */
    public function __construct($storagePath, $tempFilePath, $driver, $fileName, $type)
    {
        $this->tempFilePath = $tempFilePath;
        $this->driver = $driver;
        $this->fileName = $fileName;
        $this->storagePath = $storagePath;
        $this->type = $type;

        $this->onConnection('database-upload-video');
        $this->onQueue('upload-video');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ($this->type == 'story-video') {

/*            dd('livewire-tmp/' .$this->fileName);*/

            FFMpeg::open('livewire-tmp/' .$this->fileName)
                ->export()
                ->toDisk('ftp')
                ->save($this->storagePath);

            Storage::disk('ftp')->delete('livewire-tmp/' . $this->fileName);

        } elseif ($this->type == 'story-image') {

            Storage::disk('ftp')->put($this->storagePath, file_get_contents($this->tempFilePath));
            Session::forget('fileName');
            Storage::disk('ftp')->delete('livewire-tmp/' . $this->fileName);

        } else {
            //course video
            Storage::disk($this->driver)
                ->putFileAs($this->storagePath, $this->tempFilePath, $this->fileName);
        }


    }
}
