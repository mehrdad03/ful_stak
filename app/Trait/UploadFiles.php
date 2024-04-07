<?php

namespace App\Trait;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait UploadFiles
{
    private $drive = 'public';
    protected function uploadFile($id,$oldFile,$file,$type,$fileType)
    {
        $extension = $file->extension();
        $file_name = Str::random(10) . time() . '.' . $extension;
        $path = '/courses/' . $id . '/'.$type;

        $storagePath = public_path() . $path;

        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0777, true);
        }

        $file->storeAs($path, $file_name, $this->drive);
        $this->insertMediaToMediaTable($path . '/' . $file_name, $id, $type);


        if ($oldFile) {
            $this->removeOldFile(public_path() . $oldFile);
        }


    }
    protected function removeOldFile($oldFile): void
    {

        Storage::disk($this->drive)->delete($oldFile);

    }

    protected function insertMediaToMediaTable($path, $courseId, $type)
    {
        return \App\Models\Media::query()->updateOrCreate(
            [
                'course_id' => $courseId,
                'type' => $type,
            ],
            [
                'path' => $path,
            ]
        );
    }


}
