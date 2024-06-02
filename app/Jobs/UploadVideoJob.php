<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeEncrypted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class UploadVideoJob implements ShouldQueue,ShouldBeEncrypted
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout=3600;

    protected $tempFilePath;
    protected $driver;
    protected $storagePath;
    protected $fileName;

    /**
     * Create a new job instance.
     */
    public function __construct($storagePath,$tempFilePath,$driver,$fileName)
    {
        $this->tempFilePath=$tempFilePath;
        $this->driver=$driver;
        $this->fileName=$fileName;
        $this->storagePath=$storagePath;

        $this->onConnection('database-upload-video');
        $this->onQueue('upload-video');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
     //   dd($this->storagePath, $this->tempFilePath, $this->fileName);
        Storage::disk($this->driver)
            ->putFileAs($this->storagePath, $this->tempFilePath, $this->fileName);

     /*   $file->storeAs($storagePath, $file_name, $this->drive);*/
    }
}
