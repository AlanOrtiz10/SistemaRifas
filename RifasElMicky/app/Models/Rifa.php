<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rifa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_premio',
        'costo_boleto',
        'fecha_inicio',
        'fecha_fin',
        'fin_condicional',
        'cantidad_boletos'
    ];

    // Relación con los boletos
    public function boletos()
    {
        return $this->hasMany(Boleto::class);
    }
}
