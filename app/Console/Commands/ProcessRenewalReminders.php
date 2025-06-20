<?php

namespace App\Console\Commands;

use App\Models\Subscription;
use App\Jobs\SendRenewalReminder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ProcessRenewalReminders extends Command
{
    protected $signature = 'gst:process-renewals';
    protected $description = 'Process subscription renewal reminders';

    public function handle()
    {
        $now = now();
         
        $expiringSubscriptions = Subscription::where('status', 'active')
            ->whereDate('expires_at', now()->addDays(30)->toDateString())
            ->get();
            
        foreach ($expiringSubscriptions as $subscription) {
            SendRenewalReminder::dispatch($subscription);

            $this->info("🔔 30-DAY RENEWAL REMINDER: GSTIN {$subscription->gstin} - Email: {$subscription->email} - Phone: {$subscription->phone} - Expires: {$subscription->expires_at->format('d M Y')} - Plan: ₹99/month");
            
            Log::info("Subscription 30-Day Renewal Reminder", [
                'subscription_id' => $subscription->id,
                'gstin' => $subscription->gstin,
                'email' => $subscription->email,
                'phone' => $subscription->phone,
                'expires_at' => $subscription->expires_at,
                'reminder_type' => '30_day_renewal'
            ]);
        }
        
        $this->info('30-day renewal reminders processed successfully.');

        $finalReminderSubscriptions = Subscription::where('status', 'active')
            ->where('reminder_days', false)
            ->whereDate('expires_at', $now->addDays(7)->toDateString())
            ->get();

        foreach ($finalReminderSubscriptions as $subscription) {
            $this->error("🚨 FINAL 7-DAY RENEWAL REMINDER: GSTIN {$subscription->gstin} - Email: {$subscription->email} - Phone: {$subscription->phone} - Expires: {$subscription->expires_at->format('d M Y')} - URGENT RENEWAL NEEDED");
            
            Log::warning("Subscription 7-Day FINAL Renewal Reminder", [
                'subscription_id' => $subscription->id,
                'gstin' => $subscription->gstin,
                'email' => $subscription->email,
                'phone' => $subscription->phone,
                'expires_at' => $subscription->expires_at,
                'reminder_type' => '7_day_final_renewal'
            ]);
            
            $subscription->update(['reminder_days' => true]);
        }
        
        $this->info("✅ Renewal reminders processed: {$expiringSubscriptions->count()} 30-day, {$finalReminderSubscriptions->count()} 7-day reminders logged.");
    }
}