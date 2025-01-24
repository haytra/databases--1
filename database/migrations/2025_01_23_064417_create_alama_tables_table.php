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
        Schema::create('alama_tables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alamat_id')->constrained();
            $table->foreignId('alama_table_id')->nulable();
            $table->string('alama_table_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alama_tables');
    }
};
