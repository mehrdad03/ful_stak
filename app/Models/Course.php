<?php

namespace App\Models;

use App\Trait\UploadFiles;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    use HasFactory, UploadFiles,SoftDeletes;

    protected $guarded = [];


    public function createCourse($formData, $oldCCourseThumbnail, $oldCourseIntroVideo)
    {
        DB::transaction(function () use ($formData, $oldCCourseThumbnail, $oldCourseIntroVideo) {

            $this->courseCreateOrUpdate($formData);

            if ($formData['courseThumbnail']) {


                $this->uploadFile($formData['courseId'], $oldCCourseThumbnail, $formData['courseThumbnail'], 'cover-image', null,null);

            }
            if ($formData['courseIntroVideo']) {

                $this->uploadFile($formData['courseId'], $oldCourseIntroVideo, $formData['courseIntroVideo'], 'cover-video', null,null);

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
                'course_status_id' => $formData['courseStatusId'],
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

    public function coverVideo()
    {
        return $this->belongsTo(Media::class, 'id', 'course_id')->where('type', '=', 'cover-video');
    }

    public function coverImage()
    {
        return $this->belongsTo(Media::class, 'id', 'course_id')
            ->select('id', 'path', 'course_id')
            ->where('type', '=', 'cover-image');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class);
    }
    public function lectures()
    {
        return $this->hasMany(CourseSectionLecture::class);
    }
    public function scopeWithTotalDuration(Builder $query)
    {
        $query->withCount(['lectures as total_duration' => function ($query) {
            $query->select(DB::raw('SUM(duration)'));
        }]);
    }



}
