<?php

namespace App\Services;

use Twilio\Rest\Client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class NotificationService
{
    protected $twilio;
    
    public function __construct()
    {
        $this->twilio = new Client(
            config('services.twilio.sid'),
            config('services.twilio.token')
        );
    }

    public function sendSms($phone, $message)
    {
        try {
            $this->twilio->messages->create(
                "+91{$phone}",
                [
                    'from' => config('services.twilio.from'),
                    'body' => $message
                ]
            );
            Log::info("SMS sent to {$phone}");
        } catch (\Exception $e) {
            Log::error("SMS failed to {$phone}: " . $e->getMessage());
        }
    }

    public function sendWhatsApp($phone, $message)
    {
        try {
            $this->twilio->messages->create(
                "whatsapp:+91{$phone}",
                [
                    'from' => 'whatsapp:' . config('services.twilio.whatsapp_from'),
                    'body' => $message
                ]
            );
            Log::info("WhatsApp sent to {$phone}");
        } catch (\Exception $e) {
            Log::error("WhatsApp failed to {$phone}: " . $e->getMessage());
        }
    }

    public function sendEmail($email, $subject, $message)
    {
        try {
            Mail::raw($message, function ($mail) use ($email, $subject) {
                $mail->to($email)->subject($subject);
            });
            Log::info("Email sent to {$email}");
        } catch (\Exception $e) {
            Log::error("Email failed to {$email}: " . $e->getMessage());
        }
    }
}