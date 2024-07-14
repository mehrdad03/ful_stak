<?php

namespace App\Livewire\Client\Home;

use App\Models\Category;

use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;

    public $categories = [];

    public function mount()
    {

        $slugs = ['frontend-road-map', 'backend-road-map', 'fullstack-road-map', 'master-courses'];

        $this->categories = Category::query()->whereIn('url_slug', $slugs)
            ->with(['courses' => function ($query) {
                $query->select('courses.id', 'courses.title', 'courses.url_slug', 'courses.price', 'courses.discount', 'courses.short_description', 'courses.category_id', 'courses.active')
                    ->where('courses.active', true)
                    ->withTotalDuration()
                    ->with('coverImage', 'courseStatus');

            }])
            ->get()
            ->keyBy('url_slug');
        $this->seoConfing();

        // dd($this->categories);


    }

    public function seoConfing()
    {
        $this->seo()
            ->setTitle('آموزش برنامه نویسی از صفر تا صد')
            ->setDescription('آموزش برنامه نویسی فول استک  پروژه محور در جهت ورود به بازار کار ');
    }


    public function render()
    {

        return view('livewire.client.home.index');
    }
}
