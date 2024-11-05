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
        Schema::table('llamas', function (Blueprint $table) {
            $table->foreign('id_padre')->references('id_llama')->on('llamas')->onDelete('set null');
            $table->foreign('id_madre')->references('id_llama')->on('llamas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('llamas', function (Blueprint $table) {
            $table->dropForeign(['id_padre']);
            $table->dropForeign(['id_madre']);
        });
    }
};
