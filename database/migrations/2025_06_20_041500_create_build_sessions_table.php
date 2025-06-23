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
        Schema::create('build_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('session_id')->nullable()->comment('For guest users');
            $table->string('name')->nullable();
            $table->enum('status', ['in_progress', 'saved', 'purchased'])->default('in_progress');
            $table->decimal('total_price', 10, 2)->default(0);
            $table->boolean('compatibility_check_passed')->default(false);
            $table->text('compatibility_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('build_sessions');
    }
};
