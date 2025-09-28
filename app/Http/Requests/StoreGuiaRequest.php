<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Guias\GuiaController;

class StoreGuiaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'numero_guia' => 'required|string|max:10',
            'tipo_servicio' => 'required|string|max:20',
            'id_remitente' => 'required|exists:personas,id_persona',
            'id_destinatario' => 'required|exists:personas,id_persona',
            'peso_total_kg' => 'required|numeric|min:0',
            'valor_declarado' => 'required|numeric|min:0',
            'fecha_creacion' => 'required|date',
            'estado_actual' => 'required|string|max:20',
            'observaciones' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'numero_guia.required' => 'El número de guía es obligatorio.',
            'numero_guia.max' => 'El número de guía no puede tener más de 10 caracteres.',
            'tipo_servicio.required' => 'El tipo de servicio es obligatorio.',
            'tipo_servicio.max' => 'El tipo de servicio no puede tener más de 20 caracteres.',
            'id_remitente.required' => 'Debe seleccionar un remitente.',
            'id_remitente.exists' => 'El remitente seleccionado no es válido.',
            'id_destinatario.required' => 'Debe seleccionar un destinatario.',
            'id_destinatario.exists' => 'El destinatario seleccionado no es válido.',
            'peso_total_kg.required' => 'Debe ingresar el peso total.',
            'peso_total_kg.numeric' => 'El peso debe ser un número.',
            'peso_total_kg.min' => 'El peso no puede ser negativo.',
            'valor_declarado.required' => 'Debe ingresar el valor declarado.',
            'valor_declarado.numeric' => 'El valor declarado debe ser un número.',
            'valor_declarado.min' => 'El valor declarado no puede ser negativo.',
            'fecha_creacion.required' => 'Debe ingresar la fecha de creación.',
            'fecha_creacion.date' => 'La fecha de creación no es válida.',
            'estado_actual.required' => 'Debe ingresar el estado actual.',
            'estado_actual.max' => 'El estado actual no puede tener más de 20 caracteres.',
        ];
    }
}
