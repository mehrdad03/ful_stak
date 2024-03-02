<?php

namespace App\Livewire\Client\Basket;

use App\Models\Order;
use App\Trait\calculation;
use App\Trait\PaymentGateway;
use Livewire\Component;

class Payment extends Component
{
    use calculation;

    public $payment;
    public $basket;


    public function submitOrder(Order $order)
    {
        $payInfo = [
            'userBasketTotalPrice' => $this->payment['userBasketTotalPrice'],
            'userBasketTotalDiscount' => $this->payment['userBasketTotalDiscount']
        ];
        $order->submitOrder($payInfo, $this->basket);

    }

    public function render()
    {
        return view('livewire.client.basket.payment');
    }
}
