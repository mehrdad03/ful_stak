<?php

namespace App\Livewire\Client\Profile;

use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyCourses extends Component
{
    public $myCourses;

    public function mount(): void
    {
        $this->myCourses = OrderItem::query()
            ->where([
                'user_id' => Auth::id(),
                'pay_status' => true,
            ])
            ->with('course:id,title,url_slug','course.courseUserProgress:id,progress,course_id','course.coverImage')
            ->latest()->get();
    }
    public function render()
    {
        return view('livewire.client.profile.my-courses');
    }
}
