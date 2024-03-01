<?php

namespace App\Livewire\Client\Course;

use App\Models\Basket;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use function Laravel\Prompts\select;

class DesktopSidebar extends Component
{
    public $price;
    public $courseId;
    public $checkCourseInBasket;


    public function addToBasket(Basket $basket)
    {
       $basket= $basket->addToBasket($this->courseId);
        $this->dispatch('update-basket',count:$basket->count());

    }

    public function render()
    {
        $this->checkCourseInBasket = Basket::query()->where([
            'course_id' => $this->courseId,
            'user_id' => Auth::id(),
        ])->exists();
        return view('livewire.client.course.desktop-sidebar');
    }
}
