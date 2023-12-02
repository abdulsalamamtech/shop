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
            $table->string('name');
            $table->string('image');
            $table->decimal('price');
            $table->string('tags');
            $table->string('quantity');
            $table->string('short_descriptin');
            $table->string('descriptin');
            $table->string('information');
            $table->srting('product_images');
            $table->srting('colors');
            $table->srting('sizes');
            // Status for active 
            $table->tinyInteger('status');
            $table->foreignId('brand_id')->constrained('brands')->cascadeOnDelete();
            $table->foreignId('sub_category_id')->constrained('sub_categories')->cascadeOnDelete();
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
