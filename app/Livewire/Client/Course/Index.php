<?php

namespace App\Livewire\Client\Course;

use App\Models\Course;
use Livewire\Component;

class Index extends Component
{
    public $course;

    public function mount(Course $course)
    {
       // dd($course->with('sections'));
        $this->course = $course->with('sections.sectionLectures.sectionLectureVideos')->firstOrFail();
    }

    public function render()
    {
        return view('livewire.client.course.index');
    }
}
