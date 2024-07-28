<?php

namespace App\Livewire\Admin\Basket;

use App\Models\Basket;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $baskets = Basket::query()->with('course','user')->latest();

        return view('livewire.admin.basket.index', [
            'baskets' => $baskets->paginate(10),
        ])->layout('layouts.app-admin');
    }

}
