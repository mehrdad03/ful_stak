<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $users = User::query()->withCount('orders')->paginate(10);
        return view('livewire.admin.user.index',['users'=>$users])->layout('layouts.app-admin');
    }
}
