<?php

namespace App\Livewire\Client\Course;

use App\Models\CourseLectureVideo;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Season extends Component
{
    public $sections;
    public $sectionLectures;
    public $courseTotalDuration;

    public function mount()
    {
        // Session is declared in the course index component
        $this->courseTotalDuration = CourseLectureVideo::query()->where('course_id', Session::get('courseId'))->sum('duration');

    }
    public function render()
    {
        return view('livewire.client.course.season');
    }
}
