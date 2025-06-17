<?php

namespace App\Console\Commands;

use App\Models\Subscription;
use App\Jobs\SendRenewalReminderJob;
use Illuminate\Console\Command;

class ProcessRenewalReminders extends Command
{
    protected $signature = 'gst:process-renewals';
    protected $description = 'Process subscription renewal reminders';

    public function handle()
    {
        $expiringSubscriptions = Subscription::where('status', 'active')
            ->whereDate('expires_at', now()->addDays(30)->toDateString())
            ->get();
            
        foreach ($expiringSubscriptions as $subscription) {
            SendRenewalReminderJob::dispatch($subscription);
        }
        
        $this->info('Renewal reminders processed successfully.');
    }
}
