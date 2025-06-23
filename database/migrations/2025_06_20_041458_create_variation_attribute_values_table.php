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
        Schema::create('variation_attribute_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('variation_id')->constrained('product_variations')->onDelete('cascade');
            $table->foreignId('attribute_value_id')->constrained('attribute_values')->onDelete('cascade');
            $table->timestamps();
            
            // Use a custom shorter name for the unique index
            $table->unique(['variation_id', 'attribute_value_id'], 'var_attr_val_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variation_attribute_values');
    }
};
