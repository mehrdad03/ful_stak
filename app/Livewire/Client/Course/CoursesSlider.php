<?php

namespace App\Livewire\Client\Course;

use App\Models\Comment;
use App\Models\Course;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CoursesSlider extends Component
{

public $sameCourses;
    public function mount()
    {
        $sameCoursesCategoryId = Course::query()->where('id', Session::get('courseId'))->pluck('category_id')->first();
        $this->sameCourses = Course::query()
            ->where('category_id',$sameCoursesCategoryId )
            ->with('cover-image')
            ->select('id','title','short_description','url_slug')->get();

    }
    public function render()
    {
        return view('livewire.client.course.courses-slider');
    }
}
