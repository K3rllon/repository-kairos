<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('organizer')->nullable();
            $table->string('event_type')->nullable();
            $table->integer('capacity')->nullable();
            $table->decimal('price', 8, 2)->default(0);
            $table->enum('status', ['active', 'ended', 'canceled'])->default('active');
            $table->string('registration_link')->nullable();
            $table->string('contact')->nullable();
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
