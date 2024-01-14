<?php

namespace App\Livewire\Admin\Course;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function deleteCourse($courseId)

    {
        Course::query()->where('id', $courseId)->delete();
        $this->dispatch('swal:alert-success');

    }

    public function render()
    {
        $courses = Course::query()->paginate(10);
        return view('livewire.admin.course.index',
            ['courses' => $courses]
        )->layout('layouts.app-admin')->title('دوره ها');
    }
}
