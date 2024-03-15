<?php

namespace App\Livewire\Client\Profile;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $latestCourses;

    public function mount(): void
    {
        $this->latestCourses = Order::query()
            ->where([
                'user_id' => Auth::id()
            ])
            ->with('orderItems.course')
            ->latest()->take(3)->get();

    }

    public function render()
    {
        return view('livewire.client.profile.dashboard');
    }
}
