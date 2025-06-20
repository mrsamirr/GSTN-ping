<?php
namespace App\Console\Commands;

use App\Models\GstReminder;
use App\Jobs\SendGstReminderJob;
use Illuminate\Console\Command;
use Carbon\Carbon;

class ProcessGstReminders extends Command
{
    protected $signature = 'gst:process-reminders';
    protected $description = 'Process GST reminders and queue notifications';

    public function handle()
    {
        $now = now();
        
        $twoDayReminders = GstReminder::where('two_day_sent', false)
            ->whereDate('due_date', $now->copy()->addDays(2)->toDateString())
            ->get();
        
        
            
        foreach ($twoDayReminders as $reminder) {
            SendGstReminderJob::dispatch($reminder, 'two_day');

             $this->info("📅 2-DAY REMINDER: GSTIN {$reminder->gstin} - Due: {$reminder->due_date->format('d M Y H:i')} - Email: {$reminder->email} - Phone: {$reminder->phone}");
            
            Log::info("GST 2-Day Reminder", [
                'gstin' => $reminder->gstin,
                'due_date' => $reminder->due_date,
                'email' => $reminder->email,
                'phone' => $reminder->phone,
                'reminder_type' => 'two_day'
            ]);
            
            $reminder->update(['two_day_sent' => true]);
        }
        
        $twoHourReminders = GstReminder::where('two_hour_sent', false)
            ->whereDate('due_date', $now->toDateString())
            ->whereTime('due_date', '<=', $now->addHours(2)->toTimeString())
            ->get();
            
        foreach ($twoHourReminders as $reminder) {
            SendGstReminderJob::dispatch($reminder, 'two_hour');
              $this->error("⏰ URGENT 2-HOUR REMINDER: GSTIN {$reminder->gstin} - Due: {$reminder->due_date->format('d M Y H:i')} - Email: {$reminder->email} - Phone: {$reminder->phone}");
            
            Log::warning("GST 2-Hour URGENT Reminder", [
                'gstin' => $reminder->gstin,
                'due_date' => $reminder->due_date,
                'email' => $reminder->email,
                'phone' => $reminder->phone,
                'reminder_type' => 'two_hour_urgent'
            ]);
            
            $reminder->update(['two_hour_sent' => true]);
        }

        $this->info("✅ GST reminders processed: {$twoDayReminders->count()} two-day, {$twoHourReminders->count()} two-hour reminders logged.");
        }
        
}