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
        Schema::create('especialistas', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->string('rut', 11); 
            $table->string('numero', 15);  
            $table->string('correo', 40); 
            $table->string('direccion', 40); 
            $table->timestamps();

            $table->unsignedInteger('especialidad_id');

            $table->foreign('especialidad_id')->references('id')->on('especialidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especialistas');
    }
};
