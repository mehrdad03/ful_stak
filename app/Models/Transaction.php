<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function savePaymentInfo($response, $status, $amount, $orderId)
    {
        $referenceId = 0;
        $cardPan = 0;

        if ($status) {
            $referenceId = $response->referenceId();
            $cardPan = $response->cardPan();
            Basket::query()->where('user_id', Auth::id())->delete();
        }
        Transaction::query()->create([
            'user_id' => Auth::id(),
            'amount' => $amount,
            'status' => $status,
            'trans_number' => $this->transactionNumber(),
            'trans_id' => $referenceId,
            'cardPan' => $cardPan,
            'order_id' => $orderId,
        ]);


        Order::query()->where('id', $orderId)->update(['pay_status' => $status]);


    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function transactionNumber(): int
    {
        do {
            $randomCode = rand(1000, 100000000);

            $checkCode = Transaction::query()->where('trans_number', $randomCode)->first();
        } while ($checkCode);

        return $randomCode;

    }
}
