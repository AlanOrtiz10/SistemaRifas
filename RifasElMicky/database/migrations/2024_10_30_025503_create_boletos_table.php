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
        Schema::create('boletos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rifa_id')->constrained('rifas')->onDelete('cascade'); // Relación con la tabla de rifas
            $table->integer('numero_boleto');          // Número del boleto
            $table->string('nombre')->nullable();      // Nombre de la persona que lo adquirió
            $table->string('apellidos')->nullable();   // Apellidos de la persona que lo adquirió
            $table->enum('estado', ['Pagado', 'No pagado', 'Disponible'])->default('Disponible'); // Estado del boleto
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boletos');
    }
};
