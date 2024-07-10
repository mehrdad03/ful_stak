<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class DeleteFileFromFtpJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout = 3600;
    /**
     * Create a new job instance.
     */

    protected $drive;
    protected $oldFile;
    public function __construct($oldFile,$drive)
    {
        $this->drive=$drive;
        $this->oldFile=$oldFile;

        $this->onConnection('database-delete-file');
        $this->onQueue('delete-file');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Storage::disk($this->drive)->delete($this->oldFile);
    }
}
