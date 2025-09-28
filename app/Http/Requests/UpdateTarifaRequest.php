<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTarifaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_tarifa'        => 'sometimes|required|string|max:255',
            'id_ubicacion_origen'  => 'sometimes|required|integer|exists:ubicacion,id_ubicacion',
            'id_ubicacion_destino' => 'sometimes|required|integer|exists:ubicacion,id_ubicacion',
            'tipo_servicio'        => 'sometimes|required|string|max:100',
            'peso_minimo_kg'       => 'sometimes|required|numeric|min:0',
            'peso_maximo_kg'       => 'sometimes|required|numeric|gte:peso_minimo_kg',
            'tarifa_base'          => 'sometimes|required|numeric|min:0',
            'tarifa_adicional_kg'  => 'nullable|numeric|min:0',
            'tiempo_entrega_horas' => 'nullable|integer|min:1',
            'vigencia_desde'       => 'sometimes|required|date',
            'vigencia_hasta'       => 'nullable|date|after_or_equal:vigencia_desde',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre_tarifa.required' => 'El nombre de la tarifa es obligatorio.',
            'nombre_tarifa.string'   => 'El nombre de la tarifa debe ser texto.',
            'nombre_tarifa.max'      => 'El nombre de la tarifa no debe superar los 100 caracteres.',
            'nombre_tarifa.unique'   => 'Ya existe una tarifa con ese nombre.',

            'ubicacion_origen.required' => 'La ubicación de origen es obligatoria.',
            'ubicacion_origen.integer'  => 'La ubicación de origen debe ser un número entero.',
            'ubicacion_origen.exists'   => 'La ubicación de origen seleccionada no existe.',

            'ubicacion_destino.required' => 'La ubicación de destino es obligatoria.',
            'ubicacion_destino.integer'  => 'La ubicación de destino debe ser un número entero.',
            'ubicacion_destino.exists'   => 'La ubicación de destino seleccionada no existe.',

            'tipo_servicio.required' => 'El tipo de servicio es obligatorio.',
            'tipo_servicio.string'   => 'El tipo de servicio debe ser texto.',
            'tipo_servicio.max'      => 'El tipo de servicio no debe superar los 50 caracteres.',

            'peso_minimo_kg.required' => 'El peso mínimo es obligatorio.',
            'peso_minimo_kg.numeric'  => 'El peso mínimo debe ser numérico.',
            'peso_minimo_kg.min'      => 'El peso mínimo debe ser mayor o igual a 0.',

            'peso_maximo_kg.required' => 'El peso máximo es obligatorio.',
            'peso_maximo_kg.numeric'  => 'El peso máximo debe ser numérico.',
            'peso_maximo_kg.min'      => 'El peso máximo debe ser mayor o igual a 0.',
            'peso_maximo_kg.gte'      => 'El peso máximo debe ser mayor o igual al peso mínimo.',

            'tarifa_base.required' => 'La tarifa base es obligatoria.',
            'tarifa_base.numeric'  => 'La tarifa base debe ser numérica.',
            'tarifa_base.min'      => 'La tarifa base debe ser mayor o igual a 0.',

            'tarifa_adicional_kg.required' => 'La tarifa adicional es obligatoria.',
            'tarifa_adicional_kg.numeric'  => 'La tarifa adicional debe ser numérica.',
            'tarifa_adicional_kg.min'      => 'La tarifa adicional debe ser mayor o igual a 0.',

            'tiempo_entrega_horas.required' => 'El tiempo de entrega es obligatorio.',
            'tiempo_entrega_horas.integer'  => 'El tiempo de entrega debe ser un número entero.',
            'tiempo_entrega_horas.min'      => 'El tiempo de entrega debe ser mayor a 0.',

            'vigencia_desde.required' => 'La fecha de vigencia desde es obligatoria.',
            'vigencia_desde.date'     => 'La fecha de vigencia desde debe ser válida.',

            'vigencia_hasta.required' => 'La fecha de vigencia hasta es obligatoria.',
            'vigencia_hasta.date'     => 'La fecha de vigencia hasta debe ser válida.',
            'vigencia_hasta.after_or_equal' => 'La vigencia hasta debe ser igual o posterior a la vigencia desde.',
        ];
    }
}
