<?php

namespace App\Trait;

use App\Models\Transaction;
use Illuminate\Support\Facades\Session;

trait PaymentGateway
{
    protected function zarinPalRequest($amount)
    {
        /*   dd(Session::get('zarinPalAmount'));*/
        $response = zarinpal()
            ->merchantId('e79622e9-157e-4acc-af4c-f18c281046ef')
            ->amount($amount) // مبلغ تراکنش
            ->request()
            ->description('تراکنش تستی') // توضیحات تراکنش
            ->callbackUrl('https://ful-stak.com/payment/verify') // آدرس برگشت پس از پرداخت
            ->mobile('') // شماره موبایل مشتری - اختیاری
            ->email('') // ایمیل مشتری - اختیاری
            ->send();

        if (!$response->success()) {
            return $response->error()->message();
        }

        return redirect('https://www.zarinpal.com/pg/StartPay/' . $response->authority());
    }



}
