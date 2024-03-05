<?php

namespace App\Livewire\Admin\Course;


use App\Models\Course;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Seo extends Component
{
    public $courseId, $description, $course;

    public function mount($courseId)
    {
        $this->courseId = $courseId;
        $this->course = Course::query()->where('id', $courseId)->firstOrFail();


    }

    public function submit($formData, Course $course)
    {

        if ($this->description == null or $this->description == '') {

            $formData['editor1'] = $this->course->description;
        } else {
            $formData['editor1'] = $this->description;
        }
        $validator = Validator::make($formData, [
            'editor1' => 'required|min:100',
            'meta_name' => 'required|min:5',
            'meta_description' => 'required|min:5',
            'slug' => 'required|min:5',
        ], [
            '*.required' => 'فیلد ضروری',
            'editor1.min' => 'حداقل تعداد کاراکترهای مجاز: 100',
            'meta_name.min' => 'حداقل تعداد کاراکترهای مجاز: 5',
            'meta_description.min' => 'حداقل تعداد کاراکترهای مجاز: 5',
            'url_slug.min' => 'حداقل تعداد کاراکترهای مجاز: 5',
        ]);

        $validator->validate();
        $this->resetValidation();

        $course->submitSeo($formData, $this->courseId);
        session()->flash('message', 'تنیمات سئو با موفقیت ثبت شد!');
        $this->redirect('/admin/courses',navigate: true);

    }
    public function render()
    {
        return view('livewire.admin.course.seo')->layout('layouts.app-admin');
    }
}
