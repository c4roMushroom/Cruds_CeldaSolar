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
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('cod_cliente');
            $table->string('tipo_documento');
            $table->string('nombre_cliente');
            $table->string('apellido_cliente');
            $table->string('razonSocial_cliente');
            $table->string('correo_cliente');
            $table->string('direccion_cliente');
            $table->integer('telefono_cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
