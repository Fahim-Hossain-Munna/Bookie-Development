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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('category_id');
            $table->string('product_name')->nullable();
            $table->string('product_slug')->nullable();
            $table->string('product_code')->nullable();
            $table->string('product_short_description')->nullable();
            $table->string('product_description')->nullable();
            $table->string('product_unit')->nullable();
            $table->string('product_thumbnail')->nullable();
            $table->float('hole_price',2)->nullable();
            $table->float('purchase_price',2)->nullable();
            $table->float('selling_price',2)->nullable();
            $table->float('discount_price',2)->nullable();
            $table->string('discount_type')->nullable();
            $table->string('feature')->nullable();
            $table->string('today_deal')->nullable();
            $table->string('vat_tax')->nullable();
            $table->string('shipping_type')->nullable();
            $table->float('shipping_rate',2)->nullable();
            $table->string('status')->default('deactive');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
