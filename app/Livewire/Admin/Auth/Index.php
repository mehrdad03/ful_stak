<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{

    public function adminLogout(): \Illuminate\Http\RedirectResponse
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('auth.admin');
    }

    public function adminLogin($formData)
    {
        $validator = Validator::make($formData, [
            'email' => 'required|exists:admins,email',
            'password' => 'required',
        ], [
            '*.required' => 'Required field!',
            'email.exists' => 'Invalid email!',
        ]);
        $validator->validate();
        $this->resetValidation();
        $credentials = ['email' => $formData['email'], 'password' => $formData['password']];

        $admin = Auth::guard('admin');


        if ($admin->attempt($credentials)) {

            $rout = 'admin/dashboard';

            if ($admin->user()->admin_type_id == 2) {
                $rout = 'admin/category';
            }

            if ($admin->user()->block == 0) {

                return redirect()->intended($rout);
            } else {
                session()->flash('message', 'This account has been blocked');
            }

        } else {
            session()->flash('message', 'Wrong password or Email');
        }

    }

    public function render()
    {
        return view('livewire.admin.auth.index')->layout('layouts.app-auth-admin');
    }
}
