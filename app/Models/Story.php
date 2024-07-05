<?php

namespace App\Models;

use App\Jobs\UploadVideoJob;
use App\Trait\UploadFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class Story extends Model
{
    use HasFactory, UploadFiles;

    protected $guarded = [];

    public function addStory($formData, $courseId)
    {

        $this->submitToStory($formData['title'], $courseId);

        // دریافت نام فایل از سشن
        $fileName = Session::get('fileName');

        if ($fileName) {
            // مسیر فایل در فولدر موقت
            $tempFilePath = storage_path('app/livewire-tmp/' . $fileName);

            // مسیر جدید برای ذخیره فایل در فولدر public در روت پروژه
            $newFilePath = 'courses/' . $courseId . '/stories';
            $newFile = $newFilePath . '/' . $fileName;


            // ایجاد دایرکتوری مقصد در صورت عدم وجود
            if (!File::isDirectory(public_path($newFilePath))) {
                File::makeDirectory(public_path($newFilePath), 0755, true);
            }

            $tempFileName = pathinfo($fileName, PATHINFO_FILENAME);
            $tempFileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

            $type = 'story-image';
            if ($tempFileExtension == 'mp4') {
                $type = 'story-video';
            }
            UploadVideoJob::dispatch($newFilePath . '/' . $fileName, $tempFilePath, 'ftp', $fileName, $type);


        } else {
            return response()->json(['message' => 'هیچ فایلی برای انتقال موجود نیست یا اطلاعات مربوطه قبلاً پاک شده‌اند.'], 404);
        }

    }


    public function submitToStory($title, $courseId)
    {
        Story::query()->create([
            'title' => $title,
            'user_id' => Auth::id(),
            'course_id' => $courseId,
        ]);

    }

    public function submitToMedia($path, $courseId)
    {
        Media::query()->create([
            'path' => $path,
            'type' => 'story',
            'course_id' => $courseId,
            'user_id' => Auth::id(),
        ]);

    }


}
