@extends('layouts.subscription')

@section('title', 'Subscription Activated Successfully')

@section('content')
<div class="max-w-2xl mx-auto text-center">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <div class="mb-6">
            <div class="bg-green-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check text-green-600 text-3xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Subscription Activated!</h1>
            <p class="text-gray-600">Your GST reminder service is now active.</p>
        </div>

        <div class="bg-gray-50 rounded-lg p-6 mb-6">
            <h2 class="text-lg font-semibold mb-4">Subscription Details</h2>
            <div class="space-y-2 text-left">
                <div class="flex justify-between">
                    <span class="font-medium">GSTIN:</span>
                    <span class="font-mono">{{ $subscription->gstin }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium">Phone:</span>
                    <span>{{ $subscription->phone }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium">Email:</span>
                    <span>{{ $subscription->email }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium">Valid Until:</span>
                    <span>{{ $subscription->expires_at->format('d M Y') }}</span>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-4 mb-6">
            <div class="bg-blue-50 rounded-lg p-4">
                <i class="fas fa-calendar-alt text-blue-600 text-2xl mb-2"></i>
                <h3 class="font-semibold">GSTR-1 Reminders</h3>
                <p class="text-sm text-gray-600">11th of every month</p>
            </div>
            <div class="bg-green-50 rounded-lg p-4">
                <i class="fas fa-file-alt text-green-600 text-2xl mb-2"></i>
                <h3 class="font-semibold">GSTR-2 Reminders</h3>
                <p class="text-sm text-gray-600">15th of every month</p>
            </div>
            <div class="bg-yellow-50 rounded-lg p-4">
                <i class="fas fa-file-invoice text-yellow-600 text-2xl mb-2"></i>
                <h3 class="font-semibold">GSTR-3B Reminders</h3>
                <p class="text-sm text-gray-600">20th of every month</p>
            </div>
            <div class="bg-purple-50 rounded-lg p-4">
                <i class="fas fa-bell text-purple-600 text-2xl mb-2"></i>
                <h3 class="font-semibold">Auto Reminders</h3>
                <p class="text-sm text-gray-600">Receive reminders via SMS & WhatsApp</p>
            </div>
        <div class="text-center">
            <a href="{{ route('subscription.dashboard', ['subscription' => $subscription->id]) }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-200">
            Go to Dashboard
            </a>
        </div>
