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
            Schema::table("neneks", function (Blueprint $table) {
            $table->foreignId('kake_id')->after('id')->references('id')->on('kakes')->nullable()->onDelete('cascade');
        });
        Schema::table("bapaks", function (Blueprint $table) {
            $table->foreignId('kake_id')->after('id')->references('id')->on('kakes')->nullable()->onDelete('cascade');
            $table->foreignId('nenek_id')->after('id')->references('id')->on('neneks')->nullable()->onDelete('cascade');
       });
         Schema::table("ibus", function (Blueprint $table) {
          $table->foreignId('kake_id')->after('id')->references('id')->on('kakes')->nullable()->onDelete('cascade');
         $table->foreignId('nenek_id')->after('id')->references('id')->on('neneks')->nullable()->onDelete('cascade');
         $table->foreignId('bapak_id')->after('id')->references('id')->on('bapaks')->nullable()->onDelete('cascade');
   });
         Schema::table("anaks", function (Blueprint $table) {
            $table->foreignId('kake_id')->after('id')->references('id')->on('kakes')->nullable()->onDelete('cascade');
            $table->foreignId('nenek_id')->after('id')->references('id')->on('neneks')->nullable()->onDelete('cascade');
            $table->foreignId('bapak_id')->after('id')->references('id')->on('bapaks')->nullable()->onDelete('cascade');
            $table->foreignId('ibu_id')->after('id')->references('id')->on('ibus')->nullable()->onDelete('cascade');
  });
        Schema::table("users", function (Blueprint $table) {
            $table->foreignId('kake_id')->after('id')->references('id')->on('kakes')->nullable()->onDelete('cascade');
            $table->foreignId('nenek_id')->after('id')->references('id')->on('neneks')->nullable()->onDelete('cascade');
            $table->foreignId('bapak_id')->after('id')->references('id')->on('bapaks')->nullable()->onDelete('cascade');
            $table->foreignId('ibu_id')->after('id')->references('id')->on('ibus')->nullable()->onDelete('cascade');
            $table->foreignId('anak_id')->after('id')->references('id')->on('anaks')->nullable()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
