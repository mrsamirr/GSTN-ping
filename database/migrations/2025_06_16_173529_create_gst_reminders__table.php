<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGstRemindersTable extends Migration
{
    public function up()
    {
        Schema::create('gst_reminders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscription_id')->constrained()->onDelete('cascade');
            $table->string('reminder_type'); // 'gstr1', 'gstr3b', 'gstr9'
            $table->date('due_date');
            $table->boolean('two_day_sent')->default(false);
            $table->boolean('two_hour_sent')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gst_reminders');
    }
}