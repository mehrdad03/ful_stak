<?php

namespace App\Livewire\Admin\Course;

use App\Models\Category;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Create extends Component
{
    public $courseId = 0, $categories, $category, $teachers;
    public $course;//edit

    public function mount()
    {
        if ($_GET and $_GET['courseId']) {
            $this->courseId = $_GET['courseId'];
            $this->course = Course::query()->where('id', $_GET['courseId'])->firstOrFail();
        }

        $this->categories = Category::all();
        $this->teachers = Teacher::all();

    }

    public function createCourse($formData, Course $course)
    {

        $formData['courseId'] = 0;
        if ($this->courseId != 0) {
            $formData['courseId'] = $this->courseId;
        }


        $validator = Validator::make($formData, [
            'title' => 'required|unique:courses,title,' . $this->courseId . '|string|max: 100',
            'categoryId' => 'required|integer|exists:categories,id',
            'price' => 'required|integer',
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

        $course->createCourse($formData);

        session()->flash('message', 'دوره با موفقیت ثبت شد!');
        $this->redirect('/admin/courses',navigate: true);


    }

    public function render()
    {
        return view('livewire.admin.course.create')->layout('layouts.app-admin');
    }
}