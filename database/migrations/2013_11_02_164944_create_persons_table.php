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
        Schema::create('persons', function (Blueprint $table) {
            $table->string('dni', 8)->primary();
            $table->string('apellido_paterno', 100);
            $table->string('apellido_materno', 100);
            $table->string('nombres', 150);
            $table->string('telefono', 20)->nullable();
            $table->string('email')->unique()->nullable();
            $table->unsignedBigInteger('id_region');
            $table->unsignedBigInteger('id_province'); 
            $table->unsignedBigInteger('id_districts'); 
            $table->boolean('estado');
            $table->foreign('id_region')->references('id_region')->on('regions')->onDelete('cascade');
            $table->foreign('id_province')->references('id_province')->on('provinces')->onDelete('cascade');
            $table->foreign('id_districts')->references('id_districts')->on('districts')->onDelete('cascade');
            $table->dateTime('created_at',$precision=3);
            $table->dateTime('updated_at',$precision=3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
