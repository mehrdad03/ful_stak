<?php

namespace App\Livewire\Client\Payment;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{
    public $paymentStatus;
    public $paymentOrderId;
    public function mount()
    {

        $this->paymentStatus=Session::get('paymentStatus');
        $this->paymentOrderId=Session::get('paymentOrderId');

    }
    public function render()
    {

        return view('livewire.client.payment.index');
    }
}
