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
        Schema::create('caserios_anexos', function (Blueprint $table) {
            $table->string('id_caserio_anexo', 20)->primary();
            $table->string('nombre', 100);
            $table->string('id_centro_poblado', 20);
            $table->foreign('id_centro_poblado')
                  ->references('id_centro_poblado')
                  ->on('centros_poblados')
                  ->onDelete('cascade');
            $table->dateTime('created_at',$precision=3);
            $table->dateTime('updated_at',$precision=3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caserios_anexos');
    }
};
