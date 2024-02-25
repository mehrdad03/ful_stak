<?php

namespace App\Livewire\Client\Course;

use App\Models\Comment;
use App\Models\Course;
use Livewire\Component;

class CoursesSlider extends Component
{

public $cSlug;
public $sameCourses;
    public function mount()
    {
        $sameCoursesCategoryId = Course::query()->where('url_slug', $this->cSlug)->pluck('category_id')->first();
        $this->sameCourses = Course::query()
            ->where('category_id',$sameCoursesCategoryId )
            ->select('id','title','short_description','url_slug')->get();
    }
    public function render()
    {
        return view('livewire.client.course.courses-slider');
    }
}
