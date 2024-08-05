<?php

namespace App\Livewire\Admin\Visitors;

use App\Models\Visitor;
use Livewire\Component;
use Livewire\WithPagination;
use Stevebauman\Location\Facades\Location;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $visitors = Visitor::query()->latest()->paginate(10);
        // اضافه کردن اطلاعات جغرافیایی برای هر بازدیدکننده
        foreach ($visitors as $visitor) {
            $position = Location::get($visitor->ip_address);

            if ($position) {
                $visitor->countryName = $position->countryName;
                $visitor->countryCode = strtolower($position->countryCode); // کد کشور برای پرچم
                $visitor->regionName = $position->regionName;
                $visitor->cityName = $position->cityName;
            } else {
                $visitor->countryName = 'Unknown';
                $visitor->countryCode = 'unknown'; // برای حالت ناشناخته
                $visitor->regionName = 'Unknown';
                $visitor->cityName = 'Unknown';
            }
        }

        return view('livewire.admin.visitors.index', [
            'visitors' => $visitors
        ])->layout('layouts.app-admin');
    }
}
