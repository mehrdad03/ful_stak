<?php

namespace App\Livewire\Client\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;

class Index extends Component
{

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
        return redirect()->route('profile.dashboard');
    }

    public function render()
    {
        return view('livewire.client.auth.index');
    }
}
