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
        $course=$this->course = $course->with('sections.sectionLectures.sectionLectureVideos')->firstOrFail();
        //save CourseId into the session to send components
        Session::push('courseId',$course->id);
    }

    public function render()
    {
        return view('livewire.client.course.index');
    }
}
