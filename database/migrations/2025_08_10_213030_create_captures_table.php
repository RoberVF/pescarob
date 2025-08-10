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
        Schema::create('captures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('fishing_spot_id')->constrained()->onDelete('cascade');
            $table->foreignId('lure_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('species_id')->contrained()->onDelete('cascade');
            $table->decimal('weight', 5, 2)->nullable(); // Kg
            $table->decimal('length', 5, 2)->nullable(); // cm
            $table->timestamp('caught_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('captures');
    }
};
