<?php

namespace App\Models;

use App\Trait\PaymentGateway;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Order extends Model
{
    use HasFactory, PaymentGateway,SoftDeletes;

    protected $guarded = [];

    public function submitOrder($payInfo, $basket): void
    {

        $basketAmount = $payInfo['userBasketTotalPrice'];
        $basketDiscount = $payInfo['userBasketTotalDiscount'];

        DB::transaction(function () use ($basketAmount, $basketDiscount, $basket) {

            $order = Order::query()->create([
                'user_id' => Auth::id(),
                'amount' => $basketAmount - $basketDiscount,
                'discount' => $basketDiscount,
                'order_number' => $this->orderNumber(),
            ]);

            foreach ($basket as $item) {
                OrderItem::query()->create([
                    'order_id' => $order->id,
                    'user_id' => Auth::id(),
                    'course_id' => $item->course_id,
                    'price' => $item->course->price,
                    'discount' => $item->course->discount,
                ]);
            }


            Session::forget(['zarinPalAmount', 'zarinPalOrderNumber', 'zarinPalOrderId']);
            Session::put('zarinPalAmount', $basketAmount - $basketDiscount);
            Session::put('zarinPalOrderNumber', $order->number);
            Session::put('zarinPalOrderId', $order->id);

            // $this->saveScreenshotToFile($screenshot, $order->id, $order->number);
            $this->zarinPalRequest($basketAmount - $basketDiscount);

        });
    }

    function orderNumber(): int
    {
        do {
            $randomCode = rand(1000, 1000000);

            $checkCode = Order::query()->where('order_number', $randomCode)->first();
        } while ($checkCode);

        return $randomCode;

    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function transaction(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Transaction::class,'id','order_id');
    }

}



