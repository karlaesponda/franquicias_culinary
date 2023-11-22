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
        Schema::create('franquicias', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('nombre_restaurante');
            $table->string('slug', 255)->unique();
            $table->string('razon_social');
            $table->string('rfc');
            $table->string('anios_operacion');
            $table->string('num_sucursales');
            $table->boolean('marca_registrada');
            $table->decimal('costo_marca', 10, 2);
            $table->string('logotipo');
            $table->string('tipo_restaurante');
            $table->string('website');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('descripcion');
            $table->text('historia');
            $table->text('mision');
            $table->text('vision');
            $table->text('estandar_calidad');
            $table->text('mercado_meta');
            $table->string('menu');
            $table->string('inf_financiera');
            $table->text('soporte');
            $table->text('asesoramiento_ubi');
            $table->text('diseno_tienda');
            $table->text('marketing');
            $table->text('entrenamiento');
            $table->text('preparacion');
            $table->text('servicio_cliente');
            $table->text('gestion');
            $table->text('tecnologia');
            $table->string('numero_contacto_1');
            $table->string('numero_contacto_2');
            $table->string('email_1');
            $table->string('email_2');
            

            $table->timestamps();

            //relacion 1 A 1 con usuario
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('franquicias');
    }
};
