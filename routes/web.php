<?php

use App\Http\Controllers\SubscriptionController;

Route::get('/', [SubscriptionController::class, 'index'])->name('home');
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
Route::get('/success/{subscription}', [SubscriptionController::class, 'success'])->name('subscription.success');
Route::get('/dashboard/{subscription}', [SubscriptionController::class, 'dashboard'])->name('subscription.dashboard');

// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
