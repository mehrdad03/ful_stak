<?php

namespace App\Livewire\Client\Basket;

use App\Models\Basket;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $basket;
    public $userBasketTotalPrice;

    public function mount()
    {
        $this->basket = Basket::query()
            ->with('course.teacher')
            ->where('user_id', Auth::id())->get();

        $userBasketTotalPrice = 0;
        foreach ($this->basket as $item) {
            $userBasketTotalPrice += $item->course->price;
        }
        $this->userBasketTotalPrice = $userBasketTotalPrice;


    }

    public function render()
    {
        return view('livewire.client.basket.index');
    }
}
