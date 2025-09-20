<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTarifasRequest extends FormRequest
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
    // Si en la ruta usas Route Model Binding:  Route::resource('tarifas', ...)
    // y el parámetro se llama 'tarifa'
    $id = $this->route('tarifa')->id;

    return [
        'nombre_tarifa' => [
            'nullable',
            'string',
            'max:100',
            Rule::unique('tarifas', 'nombre_tarifa')->ignore($id, 'id'),
        ],

        'ubicacion_origen' => [
            'required',
            'integer',
            Rule::exists('ubicaciones', 'id'),
        ],

        'ubicacion_destino' => [
            'nullable',
            'integer',
            Rule::exists('ubicaciones', 'id'),
        ],

        'tipo_servicio' => [
            'required',
            'string',
            'max:50',
        ],

        'peso_minimo_kg' => [
            'required',
            'numeric',
            'min:0',
        ],

        'peso_maximo_kg' => [
            'required',
            'numeric',
            'min:0',
            'gte:peso_minimo_kg',
        ],

        'tarifa_base' => [
            'nullable',
            'numeric',
            'min:0',
        ],

        'tarifa_adicional_kg' => [
            'nullable',
            'numeric',
            'min:0',
        ],

        'tiempo_entrega_horas' => [
            'nullable',
            'integer',
            'min:0',
        ],

        'vigencia_desde' => [
            'nullable',
            'date',
        ],

        'vigencia_hasta' => [
            'nullable',
            'date',
            'after_or_equal:vigencia_desde',
        ],
    ];
}}
