<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class Course extends Model
{
    use HasFactory;

    protected $guarded = [];
    private $drive = 'public';

    public function createCourse($formData, $oldCCourseThumbnail, $oldCourseIntroVideo)
    {
        DB::transaction(function () use ($formData, $oldCCourseThumbnail, $oldCourseIntroVideo) {

            $this->courseCreateOrUpdate($formData);

            if ($formData['courseThumbnail']) {
                $this->courseThumbnail($formData['courseId'], $oldCCourseThumbnail, $formData['courseThumbnail']);
            }
            if ($formData['courseIntroVideo']) {
                $this->courseIntroVideo($formData['courseId'], $oldCourseIntroVideo, $formData['courseIntroVideo']);
            }


        });


    }

    public function courseCreateOrUpdate($formData)
    {
        Course::query()->updateOrCreate(
            [
                'id' => $formData['courseId']
            ],
            [
                'title' => $formData['title'],
                'price' => $formData['price'],
                'discount' => $formData['discount'],
                'category_id' => $formData['categoryId'],
                'teacher_id' => $formData['teacherId'],
                'short_description' => $formData['short_description'],
                'requirements' => $formData['requirements'],
                'what_you_will_learn' => $formData['what_you_will_learn']
            ]
        );

    }


    public function courseThumbnail($courseId, $oldCCourseThumbnail, $courseThumbnail)
    {
        $extension = $courseThumbnail->extension();
        $image_name = Str::random(10) . time() . '.' . $extension;
        $path = '/courses/' . $courseId . '/cover-image';

        $storagePath = public_path() . $path;

        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0777, true);
        }

        $courseThumbnail->storeAs($path, $image_name, $this->drive);
        $this->insertMediaToMediaTable($path . '/' . $image_name, $courseId, 'cover-image');


        if ($oldCCourseThumbnail) {
            $this->removeOldImage(public_path() . $oldCCourseThumbnail);
        }

    }

    public function courseIntroVideo($courseId, $oldCourseIntroVideo, $courseIntroVideo)
    {
        $extension = $courseIntroVideo->extension();
        $image_name = Str::random(10) . time() . '.' . $extension;
        $path = '/courses/' . $courseId . '/cover-video';

        $storagePath = public_path() . $path;

        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0777, true);
        }

        $courseIntroVideo->storeAs($path, $image_name, $this->drive);
        $this->insertMediaToMediaTable($path . '/' . $image_name, $courseId, 'cover-video');


        if ($oldCourseIntroVideo) {
            $this->removeOldImage(public_path() . $oldCourseIntroVideo);
        }

    }

    public function removeOldImage($oldCCourseThumbnail): void
    {

        Storage::disk($this->drive)->delete($oldCCourseThumbnail);

    }

    public function insertMediaToMediaTable($path, $courseId, $type)
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

    public function submitSeo($formData, $courseId)
    {


        \App\Models\Course::query()->where('id', $courseId)->update([
            'long_description' => $formData['editor1'],
            'url_slug' => $formData['slug'],
        ]);
        \App\Models\SeoItem::query()->updateOrCreate(
            [
                'ref_id' => $courseId,
                'type' => 'course',
            ]
            ,
            [
                'meta_name' => $formData['meta_name'],
                'meta_description' => $formData['meta_description'],

            ]
        );

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function seo()
    {
        return $this->belongsTo(SeoItem::class, 'id', 'ref_id');
    }

    public function sections()
    {
        return $this->hasMany(CourseSection::class);
    }

    public function coverVideo()
    {
        return $this->belongsTo(Media::class, 'id', 'course_id')->where('type', '=', 'cover-video');
    }

    public function coverImage()
    {
        return $this->belongsTo(Media::class, 'id', 'course_id')->where('type', '=', 'cover-image');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class);
    }


}
