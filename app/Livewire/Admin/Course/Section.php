<?php

namespace App\Livewire\Admin\Course;


use App\Models\CourseSection;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Section extends Component
{

    public $title, $course_id,$sectionId=0;
    protected $listeners = ['delete'];

    public function mount($courseId)
    {

        $this->course_id = $courseId;
    }

    public function saveSection($formData, CourseSection $courseSection)
    {
        $validator = Validator::make($formData, [
            'title' => 'required | string',
        ], [
            '*.required' => ' فیلد ضروری است.',
            '*.string' => ' فیلد باید حروف باشد.',
        ]);
        $validator->validate();
        $this->resetValidation();
        $courseSection->saveSection($formData, $this->sectionId, $this->course_id);
        $this->reset('title');
        $this->dispatch('swal:alert-success');
         $this->redirect('/admin/course/'.$this->course_id.'/section');
    }

    public function editSection($section_id)
    {

        $section = CourseSection::query()->where('id', $section_id)->first();
        $this->title = $section->title;
        $this->sectionId = $section->id;


    }

    public function delete($section_id)
    {
        CourseSection::query()->where('id', $section_id)->delete();
        $this->dispatch('swal:alert-success');
    }
    public function render()
    {
        $sections = CourseSection::query()->where('course_id', $this->course_id)->get();

        return view('livewire.admin.course.section',['sections'=>$sections])->layout('layouts.app-admin');
    }
}
