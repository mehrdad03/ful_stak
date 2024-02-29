<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;


class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function createCourse($formData)
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

    public function courseThumbnail($courseId, $oldPhoto, $courseThumbnail)
    {

        $extension = $courseThumbnail->extension();
        $image_name = Str::random(10) . time() . '.' . $extension;
        $path = '/public/course-covers/';
        $courseThumbnail->storeAs(path: $path, name: $image_name);
        $databasePath = '/storage/course-covers/';
        $this->insertImageToFileTable1($databasePath . '/' . $image_name, $courseId);
    }

    public function insertImageToFileTable1($path, $courseId)
    {
        return \App\Models\Media::query()->updateOrCreate(
            [
                'course_id' => $courseId,
                'type' => 'course_id',
            ],
            [
                'path' => $path,
            ]
        );
    }

    public function cover()
    {
        return $this->belongsTo(Media::class, 'id', 'course_id');
    }


}
