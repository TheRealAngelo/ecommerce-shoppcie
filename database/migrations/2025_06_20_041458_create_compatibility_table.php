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
        Schema::create('compatibility', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('compatible_with_id')->constrained('products')->onDelete('cascade');
            $table->enum('compatibility_type', ['confirmed', 'partial', 'not_compatible'])->default('confirmed');
            $table->text('notes')->nullable();
            $table->timestamps();
            
            // Prevent duplicate compatibility records
            $table->unique(['product_id', 'compatible_with_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compatibility');
    }
};
