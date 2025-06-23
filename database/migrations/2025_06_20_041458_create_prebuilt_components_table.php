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
        Schema::create('prebuilt_components', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prebuilt_id')->constrained('products')->onDelete('cascade');
            $table->enum('component_type', [
                'cpu', 'gpu', 'ram', 'storage', 'motherboard', 
                'psu', 'case', 'cooling', 'os', 'other'
            ]);
            $table->foreignId('component_id')->nullable()->constrained('products')->onDelete('set null');
            $table->json('component_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prebuilt_components');
    }
};
