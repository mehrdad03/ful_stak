<?php

namespace App\Livewire\Client\Basket;

use App\Models\Basket;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Item extends Component
{
    public $items;


    public function deleteConfirm($id)
    {
        $this->dispatch('swal:confirm', [
            'id' => $id,
        ]);
    }
    #[On('deleteCourse')]
    public function deleteCourse($id)
    {
        Basket::query()->where([
            'user_id' => Auth::id(),
            'id' => $id,
        ])->delete();
      $this->redirectRoute('client.basket');

    }


    public function render()
    {

        return view('livewire.client.basket.item');
    }
}
