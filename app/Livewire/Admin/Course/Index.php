<?php

namespace App\Livewire\Admin\Course;

use App\Models\Course;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use WithFileUploads;


    public $search = '';

    public function deleteCourse($courseId)

    {
        Course::query()->where('id', $courseId)->delete();
        $this->dispatch('swal:alert-success');

    }

    public function render()
    {
        $courses = Course::query()
            ->with('category', 'coverImage', 'coverVideo')
            ->orderBy('category_id');

        return view('livewire.admin.course.index', [
                'courses' => $courses->paginate(10)
            ]
        )->layout('layouts.app-admin')->title('دوره ها');
    }
}
