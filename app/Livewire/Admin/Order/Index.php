<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    public function render()
    {
        $orders = Order::query()->with('orderItems.course','transaction','user');

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
                ->Where('order_number', 'like', '%' . $this->search . '%')
                ->orWhere('amount', 'like', '%' . $this->search . '%')
                ->orWhereHas('user', function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%');
                });
        }
        return view('livewire.admin.order.index', [
            'orders' => $orders->paginate(10),
        ])->layout('layouts.app-admin');
    }
}
