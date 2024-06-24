<?php

namespace App\Livewire\Admin\Course;

use App\Models\Category;
use App\Models\Course;
use App\Models\CourseStatus;
use App\Models\Teacher;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;


    public $courseThumbnail, $courseIntroVideo;
    public $courseId = 0, $categories, $category, $teachers, $courseStatus;
    public $course;//edit
    public $oldCCourseThumbnail = '', $oldCourseIntroVideo = '';//edit

    public function mount()
    {
        if ($_GET and $_GET['courseId']) {
            $this->courseId = $_GET['courseId'];
            $this->course = Course::query()->where('id', $_GET['courseId'])->firstOrFail();
            @$this->oldCCourseThumbnail = $this->course->coverImage->path;
            @$this->oldCourseIntroVideo = $this->course->coverVideo->path;
        }

        $this->categories = Category::all();
        $this->teachers = Teacher::all();
        $this->courseStatus = CourseStatus::all();

    }

    public function createCourse($formData, Course $course)
    {

        $formData['courseId'] = 0;

        $formData['courseThumbnail'] = $this->courseThumbnail;
        $formData['courseIntroVideo'] = $this->courseIntroVideo;

        if ($this->courseId != 0) {
            $formData['courseId'] = $this->courseId;
        }


 //       dd($formData);

        $validator = Validator::make($formData, [
            'courseThumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'courseIntroVideo' => 'nullable|mimes:mp4|max:102400',
            'title' => 'required|unique:courses,title,' . $this->courseId . '|string|max: 100',
            'categoryId' => 'required|integer|exists:categories,id',
            'courseStatusId' => 'required|integer|exists:course_statuses,id',
            'price' => 'required|integer',
            'usdt_price' => 'required|integer',
            'discount' => 'required|integer',
            'teacherId' => 'required|integer|exists:teachers,id',
            'short_description' => 'required|string',
            'requirements' => 'required',
            'what_you_will_learn' => 'required',
        ], [
            '*.required' => 'فیلد ضروری',
            'title.max' => 'حداکثر تعداد کاراکتر : 50',
            '*.unique' => 'این فیلد باید منحصر به فرد باشد',
            '*.exists' => 'ورودی نامعتبر!',
        ]);


        $validator->validate();
        $this->resetValidation();

        $course->createCourse($formData, $this->oldCCourseThumbnail, $this->oldCourseIntroVideo);

        session()->flash('message', 'دوره با موفقیت ثبت شد!');
        $this->redirect('/admin/courses', navigate: true);

    }

    public function render()
    {
        return view('livewire.admin.course.create')->layout('layouts.app-admin');
    }
}
