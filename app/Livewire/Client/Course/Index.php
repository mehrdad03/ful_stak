<?php

namespace App\Livewire\Client\Course;

use App\Models\Course;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{
    public $course;

    public function mount(Course $course)
    {
        $this->course = $course->load('sections.sectionLectures');
    }

    public function render()
    {
        return view('livewire.client.course.index');
    }
}
