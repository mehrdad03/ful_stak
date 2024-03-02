<?php

namespace App\Trait;

use Illuminate\Support\Facades\Session;

trait calculation
{
    protected function CalculateUserBasketPrice($basket)
    {
        Session::forget('amount');
        $userBasketTotalPrice = 0;
        $userBasketTotalDiscount = 0;
        foreach ($basket as $item) {
            $userBasketTotalPrice += $item->course->price;
            $userBasketTotalDiscount += $item->course->discount;
        }

        $payment = [
            'userBasketTotalPrice' => $userBasketTotalPrice,
            'userBasketTotalDiscount' => $userBasketTotalDiscount,
        ];

        //save total price into session for use in the PaymentGateway trait
        Session::push('amount', $userBasketTotalPrice-$userBasketTotalDiscount);

        return $payment;


    }
}
