<?php

namespace App\Livewire\Client\Basket;

use Livewire\Component;

class Item extends Component
{
    public $items;
    public function render()
    {
        return view('livewire.client.basket.item');
    }
}
