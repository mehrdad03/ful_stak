<?php

namespace App\Livewire\Client\Profile;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Financial extends Component
{
    public $transactions = [];
    public $orderItem = [], $tranNumber;

    public function mount(): void
    {
        $this->transactions = Transaction::query()
            ->where('user_id', Auth::id())
            ->latest()->get();

    }

    public function getOrderItem($tranNumber): void
    {
        $this->tranNumber = $tranNumber;
        $orderId = Transaction::query()->where('trans_number', $tranNumber)->pluck('order_id')->first();
        $this->orderItem = OrderItem::query()
            ->where('id', $orderId)
            ->with('course:id,title,url_slug')->get();
        $this->dispatch('items-modal');

    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.client.profile.financial');
    }
}
