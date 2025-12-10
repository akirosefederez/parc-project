<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            // Add recurring donation fields
            if (!Schema::hasColumn('donations', 'frequency')) {
                $table->string('frequency')->nullable()->default('once')->after('payment_method');
            }

            if (!Schema::hasColumn('donations', 'monthly_amount')) {
                $table->decimal('monthly_amount', 8, 2)->nullable()->after('frequency');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            if (Schema::hasColumn('donations', 'monthly_amount')) {
                $table->dropColumn('monthly_amount');
            }

            if (Schema::hasColumn('donations', 'frequency')) {
                $table->dropColumn('frequency');
            }
        });
    }
};
