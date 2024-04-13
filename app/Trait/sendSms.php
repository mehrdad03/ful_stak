<?php

namespace App\Trait;

use Ghasedak\GhasedakApi;
use Illuminate\Support\Facades\Session;

trait sendSms
{
    protected function sendVerificationCode($mobile)
    {

        $api = new GhasedakApi(env('GHASEDAKAPI_KEY'));
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

    public function randomeCode()
    {
        Session::forget('smsVerificationCode');
        $code = rand(1000, 9999);
        Session::put('smsVerificationCode', $code);
        return $code;
    }
}
