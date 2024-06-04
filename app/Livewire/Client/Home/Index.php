<?php

namespace App\Livewire\Client\Home;

use App\Models\Category;

use Livewire\Component;

class Index extends Component
{
    public $categories = [];

    public function mount()
    {

        $slugs = ['frontend-road-map', 'backend-road-map', 'fullstack-road-map'];

        $this->categories = Category::query()->whereIn('url_slug', $slugs)
            ->with(['courses' => function ($query) {
                $query->select('courses.id', 'courses.title', 'courses.url_slug', 'courses.price', 'courses.discount', 'courses.short_description', 'courses.category_id', 'courses.active')
                    ->where('courses.active', true)
                    ->withTotalDuration();
            }])
            ->get()
            ->keyBy('url_slug');

        // dd($this->categories);


    }

    public function render()
    {

        return view('livewire.client.home.index');
    }
}
