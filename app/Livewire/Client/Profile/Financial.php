<?php

namespace App\Livewire\Client\Profile;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Financial extends Component
{
    public $transactions = [];

    public function mount()
    {
        $this->transactions = Transaction::query()
            ->where('user_id', Auth::id())
            ->latest()->get();

    }

    public function render()
    {
        return view('livewire.client.profile.financial');
    }
}
