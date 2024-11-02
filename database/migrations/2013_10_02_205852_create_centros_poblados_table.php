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
        Schema::create('centros_poblados', function (Blueprint $table) {
            $table->string('id_centro_poblado', 20)->primary();
            $table->string('nombre', 100);
            $table->unsignedBigInteger('id_districts');
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
        Schema::dropIfExists('centros_poblados');
    }
};
