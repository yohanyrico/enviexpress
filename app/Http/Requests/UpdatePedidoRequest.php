<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePedidoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_guia' => 'required|exists:guias,id_guia',
            'tipo_pedido' => 'required|string|max:50',
            'descripcion_pedido' => 'nullable|string',
            'instrucciones_especiales' => 'nullable|string',
            'fecha_programada' => 'required|date',
            'peso_kg' => 'required|numeric|min:0',
            'estado_pedido' => 'required|string|max:50',
        ];
    }

    public function messages()
    {
        return [
            'id_guia.required' => 'Debes seleccionar una guía.',
            'id_guia.exists' => 'La guía seleccionada no existe.',
            'tipo_pedido.required' => 'El tipo de pedido es obligatorio.',
            'tipo_pedido.max' => 'El tipo de pedido no debe superar los 50 caracteres.',
            'fecha_programada.required' => 'La fecha programada es obligatoria.',
            'fecha_programada.date' => 'La fecha programada debe tener un formato válido.',
            'peso_kg.required' => 'El peso es obligatorio.',
            'peso_kg.numeric' => 'El peso debe ser un número válido.',
            'peso_kg.min' => 'El peso no puede ser negativo.',
            'estado_pedido.required' => 'El estado del pedido es obligatorio.',
            'estado_pedido.max' => 'El estado del pedido no debe superar los 50 caracteres.',
        ];
    }
}

