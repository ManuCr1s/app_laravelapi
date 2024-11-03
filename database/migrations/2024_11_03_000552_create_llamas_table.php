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
        Schema::create('llamas', function (Blueprint $table) {
            $table->string('id_llama', 20)->primary();
            $table->string('nombre', 100);
            $table->date('fecha_nacimiento');
            $table->boolean('sexo');
            $table->string('id_padre', 20)->nullable();
            $table->string('id_madre', 20)->nullable();
            $table->string('id_clase', 20)->nullable();
            $table->foreign('id_clase')->references('id_clase')->on('clases')->onDelete('cascade');
            $table->string('id_raza', 20)->nullable();
            $table->foreign('id_raza')->references('id_raza')->on('razas')->onDelete('cascade');
            $table->string('id_productor', 20)->nullable();
            $table->foreign('id_productor')->references('id_productor')->on('productores')->onDelete('cascade');
            $table->decimal('indice_consanguinidad', 5, 4)->nullable();
            $table->decimal('indice_genealogico', 5, 4)->nullable();
            $table->integer('numero_arete')->nullable();
            $table->integer('generacion')->nullable();
            $table->decimal('peso_vivo', 5, 2)->nullable();
            $table->decimal('peso_nacimiento', 5, 2)->nullable();
            $table->decimal('peso_destete', 5, 2)->nullable();
            $table->decimal('peso_ano', 5, 2)->nullable();
            $table->string('id_color_pelaje', 20)->nullable();
            $table->foreign('id_color_pelaje')->references('id_color_pelaje')->on('colores_pelaje')->onDelete('cascade');
            $table->string('id_color_ojos', 20)->nullable();
            $table->foreign('id_color_ojos')->references('id_color_ojos')->on('colores_ojo')->onDelete('cascade');
            $table->string('id_denticion', 20)->nullable();
            $table->foreign('id_denticion')->references('id_denticion')->on('denticiones')->onDelete('cascade');
            $table->integer('numero_partos')->nullable();
            $table->date('fecha_ultimo_parto')->nullable();
            $table->string('id_estado_reproductivo', 20)->nullable();
            $table->foreign('id_estado_reproductivo')->references('id_estado_reproductivo')->on('estados_reproductivos')->onDelete('cascade');
            $table->string('id_estado_llama', 20)->nullable();
            $table->foreign('id_estado_llama')->references('id_estado_llama')->on('estados_llama')->onDelete('cascade');
            $table->decimal('altura_cabeza', 5, 2)->nullable();
            $table->decimal('longitud_ancho_oreja', 5, 2)->nullable();
            $table->decimal('longitud_punta_oreja', 5, 2)->nullable();
            $table->decimal('longitud_arqueo_oreja', 5, 2)->nullable();
            $table->decimal('longitud_base_oreja', 5, 2)->nullable();
            $table->decimal('longitud_ancho_facial_nariz', 5, 2)->nullable();
            $table->decimal('longitud_nuca_punta_nariz', 5, 2)->nullable();
            $table->decimal('perimetro_tabique_nasal', 5, 2)->nullable();
            $table->decimal('perimetro_dorso_nariz_hocico', 5, 2)->nullable();
            $table->decimal('longitud_garganta_belfos', 5, 2)->nullable();
            $table->decimal('longitud_amplitud_mandibular', 5, 2)->nullable();
            $table->decimal('longitud_mandibula_maxilar_superior', 5, 2)->nullable();
            $table->decimal('perimetro_cuello_superior', 5, 2)->nullable();
            $table->decimal('perimetro_cuello_base', 5, 2)->nullable();
            $table->decimal('longitud_punta_hombros', 5, 2)->nullable();
            $table->decimal('longitud_punta_hombro_anca', 5, 2)->nullable();
            $table->decimal('altura_cruz', 5, 2)->nullable();
            $table->decimal('altura_insercion_cuello_nuca', 5, 2)->nullable();
            $table->decimal('longitud_base_pecho_cruz', 5, 2)->nullable();
            $table->decimal('perimetro_toracico', 5, 2)->nullable();
            $table->decimal('longitud_punta_codo_rodilla', 5, 2)->nullable();
            $table->decimal('longitud_rodilla_menudillo', 5, 2)->nullable();
            $table->decimal('perimetro_caña', 5, 2)->nullable();
            $table->decimal('perimetro_muneca', 5, 2)->nullable();
            $table->decimal('longitud_barril', 5, 2)->nullable();
            $table->decimal('altura_grupa', 5, 2)->nullable();
            $table->decimal('longitud_insercion_cuello_insercion_cola', 5, 2)->nullable();
            $table->decimal('longitud_cola', 5, 2)->nullable();
            $table->decimal('longitud_punta_cadera', 5, 2)->nullable();
            $table->decimal('longitud_isquion_punta_anca', 5, 2)->nullable();
            $table->decimal('longitud_punta_isquiones', 5, 2)->nullable();
            $table->decimal('longitud_corvejon_menudillo', 5, 2)->nullable();
            $table->decimal('longitud_corvejon_rotula', 5, 2)->nullable();
            $table->decimal('longitud_amplitud_punta_corvejon', 5, 2)->nullable();
            $table->decimal('longitud_cruz_grupa', 5, 2)->nullable();
            $table->dateTime('created_at',$precision=3);
            $table->dateTime('updated_at',$precision=3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llamas');
    }
};
