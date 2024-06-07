<?php

namespace App\Livewire\Client\Basket;

use App\Models\Basket;
use App\Models\Transaction;
use App\Trait\calculation;
use App\Trait\PaymentGateway;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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

        $authority = request()->query('Authority'); // دریافت کوئری استرینگ ارسال شده توسط زرین پال
        $status = request()->query('Status'); // دریافت کوئری استرینگ ارسال شده توسط زرین پال
        $amount = Session::get('zarinPalAmount'); // قیمت ارسال شده از متود CalculateUserBasketPrice در تریت calculation
        $orderId = Session::get('zarinPalOrderId'); // قیمت ارسال شده از متود paymentZarinPal در helper_function

        $response = zarinpal()
            ->merchantId('e79622e9-157e-4acc-af4c-f18c281046ef') // تعیین مرچنت کد در حین اجرا - اختیاری
            ->amount($amount)
            ->verification()
            ->authority($authority)
            ->send();

        $transactions = new Transaction();
        if (!$response->success()) {

            $transactions->savePaymentInfo($response, false, $amount, $orderId);


        } else {
            $this->status = true;
            $transactions->savePaymentInfo($response, $this->status, $amount, $orderId);
        }
        return redirect()->route('payment.status');

    }

    public function render()
    {
        return view('livewire.client.basket.index');
    }
}
