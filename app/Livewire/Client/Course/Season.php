<?php

namespace App\Livewire\Client\Course;

use App\Models\CourseLectureVideo;
use App\Models\CourseSection;
use App\Models\CourseSectionLecture;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Season extends Component
{
    public $sections,$courseId;
    public $sectionLectures;
    public $courseTotalDuration;

    public function mount()
    {
        // Session is declared in the course index component
       $this->courseTotalDuration = CourseSectionLecture::query()->where('course_id', $this->courseId)->sum('duration');

    }
    public function render()
    {
        return view('livewire.client.course.season');
    }
}
