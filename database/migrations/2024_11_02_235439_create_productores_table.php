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
        Schema::create('productores', function (Blueprint $table) {
            $table->string('id_productor', 20)->primary();
            $table->string('dni', 8);
            $table->string('fundo', 255)->nullable();
            $table->boolean('estado');
            $table->string('id_centro_poblado', 20)->nullable();
            $table->string('id_caserio_anexo', 20)->nullable(); 
            $table->foreign('id_centro_poblado')->references('id_centro_poblado')->on('centros_poblados')->onDelete('cascade');
            $table->foreign('id_caserio_anexo')->references('id_caserio_anexo')->on('caserios_anexos')->onDelete('set null');
            $table->dateTime('created_at',$precision=3);
            $table->dateTime('updated_at',$precision=3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productores');
    }
};
