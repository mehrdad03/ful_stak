<?php

namespace App\Livewire\Client\Course;

use Livewire\Component;

class DesktopSidebar extends Component
{
    public $price;
    public function render()
    {
        return view('livewire.client.course.desktop-sidebar');
    }
}