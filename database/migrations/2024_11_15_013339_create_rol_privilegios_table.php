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
        Schema::create('rol_privilegios', function (Blueprint $table) {
            $table->string('id_rol', 20);  
            $table->string('id_privilegio', 20);
            $table->primary(['id_rol', 'id_privilegio']);
            $table->foreign('id_rol')->references('id_rol')->on('roles');
            $table->foreign('id_privilegio')->references('id_privilegio')->on('privilegios');
            $table->dateTime('created_at', $precision = 3);
            $table->dateTime('updated_at', $precision = 3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_privilegios');
    }
};
