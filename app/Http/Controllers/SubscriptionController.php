<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gstin' => 'required|string|size:15|regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/',
            'phone' => 'required|string|min:10|max:15',
            'email' => 'required|email',
            'reminder_days' => 'integer|min:1|max:7',
            'reminder_hours' => 'integer|min:1|max:24'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $subscription = Subscription::updateOrCreate(
            ['gstin' => $request->gstin],
            [
                'phone' => $request->phone,
                'email' => $request->email,
                'reminder_days' => $request->reminder_days ?? 2,
                'reminder_hours' => $request->reminder_hours ?? 2,
                'status' => 'active',
                'expires_at' => now()->addMonth()
            ]
        );

        // Generate reminders for current month
        $subscription->generateMonthlyReminders();

        return redirect()->route('subscription.success', $subscription->id);
    }

    public function success(Subscription $subscription)
    {
        return view('success', compact('subscription'));
    }

    public function dashboard(Subscription $subscription)
    {
        $subscription->load('gstReminders');
        return view('dashboard', compact('subscription'));
    }
}