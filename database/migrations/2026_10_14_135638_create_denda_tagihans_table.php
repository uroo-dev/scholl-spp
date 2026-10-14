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
        Schema::create('denda_tagihans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tagihan_id')->constrained('tagihans')->onDelete('cascade');
            $table->foreignId('kebijakan_denda_id')->constrained('kebijakan_dendas')->onDelete('cascade');
            $table->decimal('nominal', 12, 2);
            $table->text('alasan');
            $table->foreignId('disetujui_oleh')->constrained('users')->onDelete('cacade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denda_tagihans');
    }
};
