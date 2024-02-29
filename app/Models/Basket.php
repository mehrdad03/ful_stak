<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Basket extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function addToBasket($course)
    {
       return Basket::query()->updateOrCreate(
            [
                'user_id'=>Auth::id(),
                'course_id'=>$course->id
            ],
            [
                'price'=>$course->price
            ]
        );

    }

    public function course()
    {
        return $this->belongsTo(Course::class);

    }
}
