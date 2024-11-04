<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRifaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombrePremio' => 'required|string',
            'costoBoleto' => 'required|numeric',
            'fechaInicio' => 'required|date',
            'fechaFin' => [
                'nullable',
                'date',
                'after:fechaInicio',
                Rule::prohibitedIf(fn() => $this->finCondicional),
            ],
            'finCondicional' => [
                'nullable',
                'string',
                Rule::prohibitedIf(fn() => $this->fechaFin),
            ],
            'cantidadBoletos' => 'required|integer',

        ];
    }

    public function validated($key = null, $default = null){
        $validated = parent::validated();

        return [
            'nombre_premio' => $validated['nombrePremio'],
            'costo_boleto' => $validated['costoBoleto'],
            'fecha_inicio' => $validated['fechaInicio'],
            'fecha_fin' => $validated['fechaFin'],
            'fin_condicional' => $validated['finCondicional'],
            'cantidad_boletos' => $validated['cantidadBoletos']
        ];
    }

    public function messages()
    {
        return [
            'nombrePremio.required' => 'El nombre del premio es obligatorio.',
            'nombrePremio.string' => 'El nombre del premio debe ser texto.',

            'costoBoleto.required' => 'El costo del boleto es obligatorio.',
            'costoBoleto.numeric' => 'El costo del boleto debe ser un número.',

            'fechaInicio.required' => 'La fecha de inicio es obligatoria.',
            'fechaInicio.date' => 'La fecha de inicio debe ser una fecha válida.',

            'fechaFin.date' => 'La fecha de fin debe ser una fecha válida.',
            'fechaFin.after' => 'La fecha de fin debe ser posterior a la fecha de inicio.',
            'fechaFin.prohibited' => 'No puedes especificar una fecha de fin si has proporcionado un fin condicional.',

            'finCondicional.string' => 'El fin condicional debe ser texto.',
            'finCondicional.prohibited' => 'No puedes especificar un fin condicional si has proporcionado una fecha de fin.',

            'cantidadBoletos.required' => 'La cantidad de boletos es obligatoria.',
            'cantidadBoletos.integer' => 'La cantidad de boletos debe ser un número entero.',
        ];
    }
}
