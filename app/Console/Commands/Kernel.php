<?php

use Illuminate\Console\Scheduling\Schedule;

class Kernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('gst:process-reminders')->hourly();
        $schedule->command('gst:process-renewals')->daily();
    }
}