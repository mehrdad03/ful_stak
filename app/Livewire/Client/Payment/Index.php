<?php

namespace App\Livewire\Client\Payment;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{
    public $paymentStatus;
    public $paymentOrderId;
    public $transaction = [];

    public function mount()
    {

        $this->paymentStatus = Session::get('paymentStatus');
        $this->paymentOrderId = Session::get('paymentOrderId');



        $this->transaction = Transaction::query()->where([
            'order_id' => $this->paymentOrderId,
            'status' => true,
            'user_id' => Auth::id(),
        ])
            ->with('order.orderItems.course:id,title,url_slug')
            ->first();

        /* dd($this->courses);*/


    }

    public function render()
    {

        return view('livewire.client.payment.index');
    }
}
