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
                $query->select('id', 'title', 'url_slug', 'price', 'discount', 'short_description', 'category_id', 'active')
                    ->where('active', true);
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
