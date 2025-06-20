<?php

namespace App\Jobs;

use App\Models\GstReminder;
use App\Services\NotificationService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendGstReminderJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $reminder;
    protected $type; // 'two_day' or 'two_hour'

    public function __construct(GstReminder $reminder, string $type)
    {
        $this->reminder = $reminder;
        $this->type = $type;
    }

    public function handle(NotificationService $notificationService)
    {
        $subscription = $this->reminder->subscription;
        
        if (!$subscription->isActive()) {
            return;
        }

        $message = $this->buildMessage();
        
        $notificationService->sendSms($subscription->phone, $message);
        
        $notificationService->sendWhatsApp($subscription->phone, $message);
        
        if ($this->type === 'two_day') {
            $this->reminder->update(['two_day_sent' => true]);
        } else {
            $this->reminder->update(['two_hour_sent' => true]);
        }
    }

    private function buildMessage()
    {
        $dueDate = $this->reminder->due_date->format('d-m-Y');
        $reminderType = strtoupper($this->reminder->reminder_type);
        
        if ($this->type === 'two_day') {
            return "GST Reminder: {$reminderType} filing due on {$dueDate} (2 days remaining). GSTIN: {$this->reminder->subscription->gstin}";
        } else {
            return "URGENT: {$reminderType} filing due on {$dueDate} (2 hours remaining). GSTIN: {$this->reminder->subscription->gstin}";
        }
    }
}