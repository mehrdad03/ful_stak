<?php

namespace App\Livewire\Admin;


use App\Models\Transaction;
use Livewire\Component;

class Menu extends Component
{
    public $totalTransactions,$failedTransactions,$successTransactions;
    public function mount()
    {
        $this->totalTransactions = Transaction::query()->count();
        $this->failedTransactions = Transaction::query()->where('status', '=', 0)->count();
        $this->successTransactions = Transaction::query()->where('status', '=', 1)->count();

    }

    public function render()
    {
        return view('livewire.admin.menu');
    }
}
