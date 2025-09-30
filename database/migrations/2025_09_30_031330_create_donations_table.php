<?php

// database/migrations/2025_09_30_000000_create_donations_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();

            // Personal Info
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('country')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('postal')->nullable();

            // Preferences
            $table->boolean('email_updates')->default(false);
            $table->boolean('text_updates')->default(false);

            // Payment Method
            $table->enum('payment_method', ['visa', 'paypal', 'bank'])->nullable();
            $table->string('card_number')->nullable();
            $table->string('expiration_month')->nullable();
            $table->string('expiration_year')->nullable();
            $table->string('cvv')->nullable();

            // Processing Fee Checkbox
            $table->boolean('cover_processing_fee')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('donations');
    }
};

