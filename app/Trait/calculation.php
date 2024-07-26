<?php

namespace App\Trait;

use Illuminate\Support\Facades\Session;

trait calculation
{
    protected function CalculateUserBasketPrice($basket)
    {
        Session::forget('amount');

        $coursesPrice=$basket->pluck('course.price');
        $userBasketTotalPrice= $coursesPrice->sum();

        $coursesDiscount=$basket->pluck('course.discount');
        $userBasketTotalDiscount=$coursesDiscount->sum();

        $payment = [
            'userBasketTotalPrice' => $userBasketTotalPrice,
            'userBasketTotalDiscount' => $userBasketTotalDiscount,
        ];

        //save total price into session for use in the PaymentGateway trait
        Session::push('amount', $userBasketTotalPrice-$userBasketTotalDiscount);

        return $payment;


    }
}
