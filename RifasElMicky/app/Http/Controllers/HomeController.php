<?php

namespace App\Http\Controllers;

use App\Models\Boleto;
use App\Models\Rifa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($id = null)
    {
        if ($id === null) {
            $rifa = Rifa::latest()->firstOrFail();
        } else {
            $rifa = Rifa::findOrFail($id);
        }
        
        // Obtener todos los boletos vendidos para esta rifa
        $boletosVendidos = Boleto::where('rifa_id', $rifa->id)
                                 ->pluck('numero_boleto')
                                 ->toArray();
        
        // Crear un array con todos los números de boleto posibles
        $todosBoletos = range(0, $rifa->cantidad_boletos - 1);
        
        // Preparar los datos para la vista
        $boletos = [];
        foreach ($todosBoletos as $numero) {
            $boletos[] = [
                'numero_boleto' => $numero,
                'estado' => in_array($numero, $boletosVendidos) ? 'Vendido' : 'Disponible'
            ];
        }
        
        return view('content.rifas.index', compact('rifa', 'boletos'));
    }
}