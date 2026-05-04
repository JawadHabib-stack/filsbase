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
            $table->decimal('price', 10, 2)->nullable()->after('type');
            $table->decimal('sale_price', 10, 2)->nullable()->after('price');
            $table->string('sku')->nullable()->after('sale_price');
            $table->integer('stock')->default(0)->after('sku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['price', 'sale_price', 'sku', 'stock']);
        });
    }
};
