<?php

namespace App\Livewire\Admin\Course;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.course.index')->layout('layouts.app-admin')->title('دوره ها');
    }
}
