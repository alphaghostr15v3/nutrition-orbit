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
        Schema::create('nutrition_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id_custom')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('product_name')->nullable();
            $table->string('brand')->nullable();
            $table->integer('quantity')->default(0);
            $table->string('order_status')->nullable();
            $table->text('description')->nullable();
            $table->date('order_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutrition_orders');
    }
};
