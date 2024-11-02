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
        Schema::create('users', function (Blueprint $table) {
            $table->string('dni', 8)->primary();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('id_rol');
            $table->rememberToken();
            $table->dateTime('created_at',$precision=3);
            $table->dateTime('updated_at',$precision=3);
            $table->foreign('dni')->references('dni')->on('persons')->onDelete('cascade');
            $table->foreign('id_rol')->references('id_rol')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
