<?php

namespace App\Trait;

trait calculation
{
    protected function CalculateUserBasketPrice($basket)
    {
        $userBasketTotalPrice = 0;
        $userBasketTotalDiscount = 0;
        foreach ($basket as $item) {
            $userBasketTotalPrice += $item->course->price;
            $userBasketTotalDiscount += $item->course->discount;
        }

        return $payment = [
            'userBasketTotalPrice' => $userBasketTotalPrice,
            'userBasketTotalDiscount' => $userBasketTotalDiscount,
        ];


    }
}
