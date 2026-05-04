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
        Schema::table('products', function (Blueprint $table) {
            $table->string('file_url')->nullable()->after('stock');
            $table->integer('subscription_duration')->nullable()->after('file_url');
            $table->string('subscription_period')->nullable()->after('subscription_duration');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['file_url', 'subscription_duration', 'subscription_period']);
        });
    }
};
