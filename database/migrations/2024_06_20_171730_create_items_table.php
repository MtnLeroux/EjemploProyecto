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
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('nombre_item', 50);
            $table->integer('cantidad');
            $table->string('proveedor', 50); 
            $table->string('ubicacion', 50);  
            $table->date('fecha');  
            $table->unsignedInteger('categoria_id'); 
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
