<?php

namespace App\Livewire\Client\Profile;

use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $latestCourses;

    public function mount(): void
    {
        $this->latestCourses = OrderItem::query()
            ->where([
                'user_id' => Auth::id(),
                'pay_status' => true,
            ])
            ->with('course:id,title,url_slug')
            ->latest()->take(3)->get();


    }

    public function render()
    {
        return view('livewire.client.profile.dashboard');
    }
}
