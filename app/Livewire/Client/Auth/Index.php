<?php

namespace App\Livewire\Client\Auth;

use App\Models\User;
use App\Trait\SendSms;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;

class Index extends Component
{

    use SendSms;

    public $showInsertCodeView = false;
    public $sendCodeSmsError = false, $userMobile;
    public $code, $codeInvalidError = false;

    public function mount()
    {
        Session::put('previous_url', url()->previous());
    }

    public function clientLogout(): \Illuminate\Http\RedirectResponse
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('auth.client');
    }

    public function redirectToProvider(): \Symfony\Component\HttpFoundation\RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(User $user)
    {
        $gmailUser = Socialite::driver('google')->stateless()->user();
        $user->checkUser($gmailUser);
        $previousUrl = Session::pull('previous_url', route('client.home')); // اگر آخرین route موجود نبود، به route خانه ریدایرکت کن
        return redirect()->intended($previousUrl);
    }


    /*
     * github oath
     * */

    public function redirectToGithubProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubProviderCallback(User $user)
    {
        $githubUser = Socialite::driver('github')->stateless()->user();

        $user->checkUser($githubUser, 'github');

        return redirect()->route('client.home');

    }

    public function sendCode($formData)
    {

        $validator = Validator::make($formData, [

            'mobile' => ['required', 'regex:/^09\d{9}$/'],
        ], [
            'required' => 'شماره موبایل الزامی است !',
            'regex' => 'شماره موبایل نامعتیر است!',
        ]);

        $validator->validate();
        $this->resetValidation();

        $this->reset('code');

        //use in the submitUserWithMobile method
        $this->userMobile = $formData['mobile'];
        //send data to SendSms trait
        $response = $this->sendVerificationCode($formData['mobile']);


        $response ? $this->showInsertCodeView = true : $this->sendCodeSmsError = true;

    }

    public function submitUserWithMobile($formData, User $user)
    {

        $validator = Validator::make($formData, [

            'code' => ['required', 'numeric', 'digits:4'],
        ], [
            'required' => 'کد احراز هویت الزامی است !',
            'digits' => 'کد احراز هویت 4 رقمی است !',
            'numeric' => 'کد احراز هویت فقط شامل اعداد است !',
        ]);

        $validator->validate();
        $this->resetValidation();

        if ($formData['code'] == Session::get('smsVerificationCode')) {
            $user->checkUserWithMobile($this->userMobile);

        } else {
            $this->codeInvalidError = true;
        }

    }


    public function render()
    {
        return view('livewire.client.auth.index');
    }
}
