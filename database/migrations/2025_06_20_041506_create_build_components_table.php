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
        Schema::create('build_components', function (Blueprint $table) {
            $table->id();
            $table->foreignId('build_id')->constrained('build_sessions')->onDelete('cascade');
            $table->enum('component_type', [
                'cpu', 'motherboard', 'gpu', 'ram', 'storage', 
                'psu', 'case', 'cooling', 'os', 'other'
            ]);
            $table->foreignId('product_id')->constrained('products')->onDelete('restrict');
            $table->integer('quantity')->default(1);
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('build_components');
    }
};
