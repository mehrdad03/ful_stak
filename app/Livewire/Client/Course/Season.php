<?php

namespace App\Livewire\Client\Course;

use Livewire\Component;

class Season extends Component
{
    public $sections;
    public $sectionLectures;

    public function render()
    {
        return view('livewire.client.course.season');
    }
}
