<?php

namespace App\Trait;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait UploadFiles
{
    private $drive = 'public';

    protected function uploadFile($id, $oldFile, $file, $type, $section_id,$lecture_id)
    {

        $extension = $file->extension();
        $file_name = Str::random(10) . time() . '.' . $extension;
        $path = '/courses/' . $id . '/' . $type;

        $storagePath = public_path() . $path;

        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0777, true);
        }

        $file->storeAs($storagePath, $file_name, $this->drive);
        $this->insertMediaToMediaTable($path . '/' . $file_name, $id, $type,$section_id,$lecture_id);


        if ($oldFile) {
            $this->removeOldFile(public_path() . $oldFile);
        }

        //use in the CourseSectionLecture Model for getVideoDurationAndUpdateTable
        return ['path'=>$path . '/' . $file_name];


    }

    protected function removeOldFile($oldFile): void
    {

        Storage::disk($this->drive)->delete($oldFile);

    }

    protected function insertMediaToMediaTable($path, $courseId, $type, $section_id, $lecture_id)
    {

        return \App\Models\Media::query()->updateOrCreate(
            [
                'course_id' => $courseId,
                'type' => $type,
                'lecture_id' => $lecture_id ,

            ],
            [
                'path' => $path,
                'section_id' => $section_id,
            ]
        );
    }

}
