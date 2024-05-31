<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class UploadVideoJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
     //   dd($this->storagePath, $this->tempFilePath, $this->fileName);
        Storage::disk($this->driver)->putFileAs($this->storagePath, $this->tempFilePath, $this->fileName);

     /*   $file->storeAs($storagePath, $file_name, $this->drive);*/
    }
}
