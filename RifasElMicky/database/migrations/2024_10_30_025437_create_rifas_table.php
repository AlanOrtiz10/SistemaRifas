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
        Schema::create('rifas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_premio');             // Nombre del premio
            $table->decimal('costo_boleto', 8, 2);       // Costo por boleto
            $table->date('fecha_inicio');                // Fecha de inicio de la rifa
            $table->date('fecha_fin')->nullable();       // Fecha de fin de la rifa (puede ser null)
            $table->integer('cantidad_boletos');         // Cantidad total de boletos
            $table->string('fin_condicional')->nullable(); // Texto indicando la condición alternativa (ej. "hasta vender X boletos")
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rifas');
    }
};
