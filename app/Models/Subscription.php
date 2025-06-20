<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'gstin', 'phone', 'email', 'reminder_days', 
        'reminder_hours', 'status', 'expires_at'
    ];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    public function gstReminders() //one-to-many relationship.
    {
        return $this->hasMany(GstReminder::class);
    }

    public function isActive()
    {
        return $this->status === 'active' && $this->expires_at > now();
    }

    public function isExpiringSoon()
    {
        return $this->expires_at->diffInDays(now()) <= 30;
    }

    public function generateMonthlyReminders()
    {
        $currentMonth = now()->startOfMonth();
        
        // GSTR-1 (11th of next month)
        $gstr1Due = $currentMonth->copy()->addMonth()->addDays(10);
        
        // GSTR-3B (20th of next month)
        $gstr3bDue = $currentMonth->copy()->addMonth()->addDays(19);
        
        $reminders = [
            ['reminder_type' => 'gstr1', 'due_date' => $gstr1Due],
            ['reminder_type' => 'gstr3b', 'due_date' => $gstr3bDue],
        ];

        foreach ($reminders as $reminder) {
            $this->gstReminders()->updateOrCreate(
                [
                    'reminder_type' => $reminder['reminder_type'],
                    'due_date' => $reminder['due_date']
                ],
                $reminder
            );
        }
    }
}
