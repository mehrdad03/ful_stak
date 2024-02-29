<?php

namespace App\Livewire\Client\Basket;

use Livewire\Component;

class Payment extends Component
{
    public $userBasketTotalPrice;

    public function render()
    {
        return view('livewire.client.basket.payment');
    }
}
