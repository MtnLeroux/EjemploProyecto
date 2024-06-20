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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->string('rut', 11); 
            $table->string('numero', 15);  
            $table->timestamps();

            $table->unsignedInteger('consulta_id');
            $table->unsignedInteger('especialidad_id');
            $table->unsignedInteger('especialista_id');

            $table->foreign('consulta_id')->references('id')->on('consultas');
            $table->foreign('especialidad_id')->references('id')->on('especialidades');
            $table->foreign('especialista_id')->references('id')->on('especialistas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
