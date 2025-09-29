<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeguimientoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fecha_evento' => 'required|date',
            'ubicacion_actual' => 'required|string|max:100',
            'estado_evento' => 'required|string|max:100',
            'id_empleado_responsable' => 'required|exists:empleados,id_empleado',
            'evidencia_foto' => 'nullable|image|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'fecha_evento.required' => 'La fecha del evento es obligatoria.',
            'fecha_evento.date' => 'La fecha del evento debe tener un formato válido.',
            'ubicacion_actual.required' => 'La ubicación actual es obligatoria.',
            'ubicacion_actual.max' => 'La ubicación no debe superar los 100 caracteres.',
            'estado_evento.required' => 'El estado del evento es obligatorio.',
            'estado_evento.max' => 'El estado del evento no debe superar los 100 caracteres.',
            'id_empleado_responsable.required' => 'Debes seleccionar un empleado responsable.',
            'id_empleado_responsable.exists' => 'El empleado seleccionado no existe.',
            'evidencia_foto.image' => 'La evidencia debe ser una imagen válida.',
            'evidencia_foto.max' => 'La imagen no debe superar los 2MB.',
        ];
    }
}
