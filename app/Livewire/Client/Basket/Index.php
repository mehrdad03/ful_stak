<?php

namespace App\Livewire\Client\Basket;

use App\Models\Basket;
use App\Trait\calculation;
use App\Trait\PaymentGateway;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    use calculation,PaymentGateway;

    public $basket;
    public $payment;

    public function mount()
    {
        $this->basket = Basket::query()
            ->with('course.teacher')
            ->where('user_id', Auth::id())->get();
        //from trait
        $this->payment = $this->CalculateUserBasketPrice($this->basket);

    }

    public function zarinPalPayment()
    {

        $this->zarinPalVerify();
    }

    public function render()
    {
        return view('livewire.client.basket.index');
    }
}
