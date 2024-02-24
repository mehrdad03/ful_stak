<?php

namespace App\Livewire\Client\Course;

use Livewire\Component;

class Description extends Component
{
    public $description;
    public function render()
    {
        return view('livewire.client.course.description');
    }
}
