<?php

namespace App\Models;

use App\Enum\PaymentStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'plan_id',
        'start_at',
        'end_at',
        'payment_id',
        'status',
        'payment_status',
    ];

    protected $casts = [
        'payment_status' => PaymentStatusEnum::class,
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
