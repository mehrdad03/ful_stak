<?php

namespace App\Livewire\Admin\Transaction;

use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {

        $transactions = Transaction::query()->with('user');
        if ($_GET and $_GET['status'] != 'all') {
            $transactions = $transactions->where('status', $_GET['status'])->latest();
        } elseif ($_GET and $_GET['status'] == 'all') {
            $transactions = $transactions->latest();
        }

        if ($this->search) {
            $transactions = $transactions
                ->Where('amount', 'like', '%' . $this->search . '%')
                ->orWhere('referenceId', 'like', '%' . $this->search . '%')
                ->orWhere('cardPan', 'like', '%' . $this->search . '%')
                ->orWhereHas('user', function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%');
                });
        }

        return view('livewire.admin.transaction.index', [
            'transactions' => $transactions->paginate(10)
        ])->layout('layouts.app-admin');
    }
}
