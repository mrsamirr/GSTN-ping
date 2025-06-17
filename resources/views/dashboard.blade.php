@extends('layouts.app')

@section('title', 'GST Reminder Dashboard')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">GST Reminder Dashboard</h1>
            <div class="text-sm">
                @if($subscription->isActive())
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full">
                        <i class="fas fa-check-circle mr-1"></i>
                        Active
                    </span>
                @else
                    <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full">
                        <i class="fas fa-times-circle mr-1"></i>
                        Expired
                    </span>
                @endif
            </div>
        </div>

        <!-- Subscription Info -->
        <div class="grid md:grid-cols-2 gap-6 mb-8">
            <div class="bg-gray-50 rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-4">Subscription Details</h2>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-600">GSTIN:</span>
                        <span class="font-mono font-semibold">{{ $subscription->gstin }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Phone:</span>
                        <span>{{ $subscription->phone }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Email:</span>
                        <span>{{ $subscription->email }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Valid Until:</span>
                        <span class="font-semibold 
                            @if($subscription->isExpiringSoon()) text-orange-600 @else text-green-600 @endif">
                            {{ $subscription->expires_at->format('d M Y') }}
                        </span>
                    </div>
                </div>
            </div>

            <div class="bg-blue-50 rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-4">Reminder Settings</h2>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-blue-600 mr-3"></i>
                        <span>{{ $subscription->reminder_days }} days before due date</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-clock text-blue-600 mr-3"></i>
                        <span>{{ $subscription->reminder_hours }} hours before deadline</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-sms text-blue-600 mr-3"></i>
                        <span>SMS + WhatsApp alerts</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Reminders -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Upcoming GST Reminders</h2>
            @if($subscription->gstReminders->count() > 0)
                <div class="grid gap-4">
                    @foreach($subscription->gstReminders->sortBy('due_date') as $reminder)
                        <div class="border rounded-lg p-4 flex justify-between items-center">
                            <div>
                                <h3 class="font-semibold text-lg">
                                    {{ strtoupper($reminder->reminder_type) }} Filing
                                </h3>
                                <p class="text-gray-600">
                                    Due: {{ $reminder->due_date->format('d M Y') }}
                                    ({{ $reminder->due_date->diffForHumans() }})
                                </p>
                            </div>
                            <div class="text-right">
                                <div class="space-y-1">
                                    @if($reminder->two_day_sent)
                                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">
                                            2-day reminder sent
                                        </span>
                                    @else
                                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">
                                            2-day reminder pending
                                        </span>
                                    @endif
                                    <br>
                                    @if($reminder->two_hour_sent)
                                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">
                                            2-hour reminder sent
                                        </span>
                                    @else
                                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs">
                                            2-hour reminder pending
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8 text-gray-500">
                    <i class="fas fa-calendar-times text-4xl mb-4"></i>
                    <p>No upcoming reminders scheduled.</p>
                </div>
            @endif
        </div>

        <!-- Renewal Alert -->
        @if($subscription->isExpiringSoon())
            <div class="bg-orange-50 border border-orange-200 rounded-lg p-6 mb-6">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-triangle text-orange-600 text-2xl mr-4"></i>
                    <div>
                        <h3 class="text-lg font-semibold text-orange-800">Renewal Required</h3>
                        <p class="text-orange-700">
                            Your subscription expires on {{ $subscription->expires_at->format('d M Y') }}. 
                            Renew now to continue receiving GST reminders.
                        </p>
                        <button class="mt-3 bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-200">
                            Renew for ₹99/month
                        </button>
                    </div>
                </div>
            </div>
        @endif

        <!-- Action Buttons -->
        <div class="flex space-x-4">
            <a href="{{ route('home') }}" 
               class="bg-gray-600 text-white px-6 py-2 rounded hover:bg-gray-700 transition duration-200">
                <i class="fas fa-home mr-2"></i>
                Back to Home
            </a>
            <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-200">
                <i class="fas fa-edit mr-2"></i>
                Update Settings
            </button>
        </div>
    </div>
</div>
@endsection
