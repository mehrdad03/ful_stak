<?php

namespace App\Livewire\Client;

use App\Models\Basket;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Header extends Component
{
    public $categories;
    public $basket;

    public function mount()
    {
        $this->basket = Basket::query()->where('user_id', Auth::id())->count();
        $this->categories = Category::query()
            ->where('active', '=', true)
            ->with('subCategories')
            ->whereNull('category_id')->get();

    }

    #[On('update-basket')]
    public function updateBasket($count): void
    {
        $this->basket = $count;
    }


    public function render()
    {
        return view('livewire.client.header');
    }
}
