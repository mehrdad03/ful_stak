<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public function render()
    {
        $orders = Order::query()->with('user', 'category');

        if ($_GET and $_GET['status'] != 'all') {
            $orders = $orders->where('status_id', $_GET['status'])->latest();
        } elseif ($_GET and $_GET['status'] == 'all') {
            if (@$_GET['user_id']) {
                $orders = $orders->where('user_id', $_GET['user_id'])->latest();
            } else {
                $orders = $orders->latest();
            }
        }

        if ($this->search) {
            $orders = $orders
                ->Where('number', 'like', '%' . $this->search . '%')
                ->orWhere('price', 'like', '%' . $this->search . '%');
        }


        return view('livewire.admin.order.index', [
            'orders' => $orders->paginate(10),
        ])->layout('layouts.app-admin');
    }
}
