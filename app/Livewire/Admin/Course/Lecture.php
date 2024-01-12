<?php

namespace App\Livewire\Admin\Course;

use App\Models\CourseSectionLecture;
use Livewire\Component;

class Lecture extends Component
{
    public $lectures;

    public function mount($sectionId)
    {

        $this->lectures = CourseSectionLecture::query()->where('id', $sectionId)->get();
    }
    public function render()
    {
        return view('livewire.admin.course.lecture')->layout('layouts.app-admin');
    }
}
