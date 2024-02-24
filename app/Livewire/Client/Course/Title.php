<?php

namespace App\Livewire\Client\Course;

use Livewire\Component;


class Title extends Component
{
    public $title;
    public $short_description;
    public function render()
    {
        return view('livewire.client.course.title');
    }
}
