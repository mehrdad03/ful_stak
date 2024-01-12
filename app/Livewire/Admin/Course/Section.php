<?php

namespace App\Livewire\Admin\Course;


use App\Models\CourseSection;
use Livewire\Component;

class Section extends Component
{
    public $sections;
    public function mount($courseId)
    {
        $this->sections = CourseSection::query()->where('id', $courseId)->get();
    }

    public function render()
    {
        return view('livewire.admin.course.section')->layout('layouts.app-admin');
    }
}
