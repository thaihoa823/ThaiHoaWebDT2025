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
        Schema::create('orders_products', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('user_id');
            $table->integer('vendor_id');
            $table->integer('admin_id');
            $table->integer('product_id');
            $table->string('product_code');
            $table->string('product_name');
            $table->string('product_color');
            $table->string('product_size');
            $table->float('product_price');
            $table->integer('product_qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_products');
    }
};
