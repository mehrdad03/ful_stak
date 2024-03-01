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
        Session::forget('courseId');
        $this->course = $course->with('sections.sectionLectures')->firstOrFail();

    }

    public function render()
    {
        return view('livewire.client.course.index');
    }
}
