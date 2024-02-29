<?php

namespace App\Livewire\Client\Basket;

use App\Models\Basket;
use App\Trait\calculation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    use calculation;

    public $basket;
    public $payment;

    public function mount()
    {
        $this->basket = Basket::query()
            ->with('course.teacher')
            ->where('user_id', Auth::id())->get();

         //from calculation trait
        $this->payment = $this->CalculateUserBasketPrice($this->basket);

    }

    public function render()
    {
        return view('livewire.client.basket.index');
    }
}
