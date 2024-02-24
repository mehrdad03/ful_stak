<?php

namespace App\Livewire\Client\Course;

use Livewire\Component;

class Features extends Component
{
    public $what_you_will_learn;
    public function render()
    {
        return view('livewire.client.course.features');
    }
}
