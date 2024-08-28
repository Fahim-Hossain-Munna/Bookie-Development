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
            $table->string('tag_id');
            $table->string('product_name')->nullable();
            $table->string('product_slug')->nullable();
            $table->string('product_code')->nullable();
            $table->string('product_description')->nullable();
            $table->string('product_unit')->nullable();
            $table->string('product_thumbnail')->nullable();
            $table->string('product_images')->nullable();
            $table->string('hole_price')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('selling_price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('discount_type')->nullable();
            $table->string('feature')->nullable();
            $table->string('today_deal')->nullable();
            $table->string('vat_tax')->nullable();
            $table->string('shipping_type')->nullable();
            $table->string('shipping_rate')->nullable();
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
