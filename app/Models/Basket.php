<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Basket extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function addToBasket($courseId, $price)
    {

        return Basket::query()->updateOrCreate(
            [
                'user_id' => Auth::id(),
                'course_id' => $courseId,
            ],
            [

                'price' => $price,
            ],
        );

    }

    public function course()
    {
        return $this->belongsTo(Course::class);

    }
}
