<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GstReminder extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscription_id', 'reminder_type', 'due_date',
        'two_day_sent', 'two_hour_sent'
    ];

    protected $casts = [
        'due_date' => 'date',
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}