<?php

namespace App\Jobs;

use App\Models\Subscription;
use App\Services\NotificationService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendRenewalReminder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $subscription;

    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    public function handle(NotificationService $notificationService)
    {
        $expiryDate = $this->subscription->expires_at->format('d-m-Y');
        $message = "Your GST Reminder subscription expires on {$expiryDate}. Renew now for ₹99/month to continue receiving reminders.";
        
        $notificationService->sendEmail(
            $this->subscription->email,
            'GST Reminder Subscription Renewal',
            $message
        );
        
        $notificationService->sendWhatsApp($this->subscription->phone, $message);
    }
}

