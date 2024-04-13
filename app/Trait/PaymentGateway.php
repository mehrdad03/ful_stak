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
            ->callbackUrl('https://ful-stak.dev/payment/verify') // آدرس برگشت پس از پرداخت
            ->mobile('') // شماره موبایل مشتری - اختیاری
            ->email('') // ایمیل مشتری - اختیاری
            ->send();

        if (!$response->success()) {
            return $response->error()->message();
        }

        return redirect('https://www.zarinpal.com/pg/StartPay/' . $response->authority());
    }

    protected function zarinPalVerify()
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


    }


}
