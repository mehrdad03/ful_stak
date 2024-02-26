<?php

namespace App\Livewire\Client\Course;

use App\Models\Basket;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use function Laravel\Prompts\select;

class DesktopSidebar extends Component
{
    public $price;
    public $cSlug;
    public $course;
    public $checkCourseInBasket;

    public function mount()
    {
        $this->course = Course::query()->where('url_slug', $this->cSlug)->select('id', 'price')->first();

    }

    public function addToBasket(Basket $basket)
    {
        $basket->addToBasket($this->course);
        //$this->redirectRoute('client.basket');

    }

    public function render()
    {
        $this->checkCourseInBasket = Basket::query()->where([
            'course_id' => $this->course->id,
            'user_id' => Auth::id(),
        ])->exists();
        return view('livewire.client.course.desktop-sidebar');
    }
}
