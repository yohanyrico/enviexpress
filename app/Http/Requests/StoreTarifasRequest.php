<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTarifasRequest extends FormRequest
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
    'nombre_tarifa'        => 'nullable|string|max:100',
    'ubicacion_origen'     => 'nullable|integer|exists:ubicaciones,id',
    'ubicacion_destino'    => 'nullable|integer|exists:ubicaciones,id',
    'tipo_servicio'        => 'nullable|string|max:50',
    'peso_minimo_kg'       => 'nullable|numeric|min:0',
    'peso_maximo_kg'       => 'nullable|numeric|min:0|gte:peso_minimo_kg',
    'tarifa_base'          => 'nullable|numeric|min:0',
    'tarifa_adicional_kg'  => 'nullable|numeric|min:0',
    'tiempo_entrega_horas' => 'nullable|integer|min:0',
    'vigencia_desde'       => 'nullable|date',
    'vigencia_hasta'       => 'nullable|date|after_or_equal:vigencia_desde',
];

    }
    public function messages()
{
    return [
    'nombre_tarifa.max'         => 'El nombre de la tarifa no puede superar 100 caracteres.',
    'ubicacion_origen.integer'  => 'La ubicación de origen debe ser un número entero.',
    'ubicacion_origen.exists'   => 'La ubicación de origen seleccionada no es válida.',
    'ubicacion_destino.integer' => 'La ubicación de destino debe ser un número entero.',
    'ubicacion_destino.exists'  => 'La ubicación de destino seleccionada no es válida.',
    'tipo_servicio.max'         => 'El tipo de servicio no puede superar 50 caracteres.',
    'peso_minimo_kg.numeric'    => 'El peso mínimo debe ser un valor numérico.',
    'peso_minimo_kg.min'        => 'El peso mínimo no puede ser negativo.',
    'peso_maximo_kg.numeric'    => 'El peso máximo debe ser un valor numérico.',
    'peso_maximo_kg.min'        => 'El peso máximo no puede ser negativo.',
    'peso_maximo_kg.gte'        => 'El peso máximo debe ser mayor o igual al peso mínimo.',
    'tarifa_base.numeric'       => 'La tarifa base debe ser un valor numérico.',
    'tarifa_base.min'           => 'La tarifa base no puede ser negativa.',
    'tarifa_adicional_kg.numeric'=> 'La tarifa adicional por kg debe ser un valor numérico.',
    'tarifa_adicional_kg.min'   => 'La tarifa adicional por kg no puede ser negativa.',
    'tiempo_entrega_horas.integer' => 'El tiempo de entrega debe ser un número entero de horas.',
    'tiempo_entrega_horas.min'     => 'El tiempo de entrega no puede ser negativo.',
    'vigencia_desde.date'       => 'La fecha de vigencia desde debe ser una fecha válida.',
    'vigencia_hasta.date'       => 'La fecha de vigencia hasta debe ser una fecha válida.',
    'vigencia_hasta.after_or_equal' => 'La fecha de vigencia hasta debe ser posterior o igual a la fecha de inicio.',
];

}
}
