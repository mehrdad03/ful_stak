<?php

namespace App\Trait;

use Ghasedak\GhasedakApi;
use Illuminate\Support\Facades\Session;

trait SendSms
{
    protected function sendVerificationCode($mobile)
    {

        $api = new GhasedakApi('4534f06c067e08f05b4df3690816b5d6697ca57f818d84d257d7855f525f6adc');

        $response = $api->Verify(
            $mobile, // receptor
            "fulstaksmsVerification",  // name of the template which you've created in you account
            $this->randomeCode(), // parameters (supporting up to 10 parameters)
        );

        if ($response->result->code == 200) {
            return true;
        } else {
            return false;
        }

    }

    public function sendSubmitOrderSms($data)
    {
        $api = new GhasedakApi('4534f06c067e08f05b4df3690816b5d6697ca57f818d84d257d7855f525f6adc');
        $response = $api->Verify(
            $data['mobile'], // receptor
            "submitOrder",  // name of the template which you've created in you account
            $data['orderNumber']  // parameters (supporting up to 10 parameters)
        );

        if ($response->result->code == 200) {
            return true;
        } else {
            return false;
        }
    }

    public function randomeCode()
    {
        Session::forget('smsVerificationCode');
        $code = rand(1000, 9999);
        Session::put('smsVerificationCode', $code);
        return $code;
    }
}
