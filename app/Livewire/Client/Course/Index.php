<?php

namespace App\Livewire\Client\Course;

use App\Models\Course;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{
    public $course;

    public function mount(Course $course): void
    {
        $this->course = $course->load('sections.sectionLectures');
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.client.course.index');
    }
}
