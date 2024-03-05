<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        $path = '/public/cover-image/';
        $courseThumbnail->storeAs(path: $path, name: $image_name);
        $databasePath = '/storage/cover-image';
        $this->insertImageToFileTable1($databasePath . '/' . $image_name, $courseId);

        if ($oldPhoto) {
            $this->removeOldImage($oldPhoto);
        }

    }

    public function removeOldImage($oldPhoto): void
    {

        unlink(public_path($oldPhoto));


        /*   return \App\Models\File::query()->where([
               'service_id' => $categoryId,
               'type' => 'category',
               'file' => $oldPhoto,
           ])->delete();*/


    }

    public function insertImageToFileTable1($path, $courseId)
    {
        return \App\Models\Media::query()->updateOrCreate(
            [
                'course_id' => $courseId,
                'type' => 'cover-image',
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

    public function teacher()
    {
        return $this->belongsTo(User::class);
    }

}
