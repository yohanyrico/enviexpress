<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;

class Guia extends Model
{
    protected $table = 'guias';
    protected $primaryKey = 'id_guia';
    public $timestamps = false;

    protected $casts = [
        'id_remitente' => 'int',
        'id_destinatario' => 'int',
        'peso_total_kg' => 'float',
        'valor_declarado' => 'float',
        'fecha_creacion' => 'datetime',
    ];

    protected $fillable = [
        'numero_guia',
        'qr_code',
        'tipo_servicio',
        'id_remitente',
        'id_destinatario',
        'peso_total_kg',
        'valor_declarado',
        'fecha_creacion',
        'estado_actual',
        'observaciones',
    ];

    // Relaciones correctas con Persona
    public function remitente()
    {
        return $this->belongsTo(Persona::class, 'id_remitente', 'id_persona');
    }

    public function destinatario()
    {
        return $this->belongsTo(Persona::class, 'id_destinatario', 'id_persona');
    }

    // Relaciones adicionales si las usas
    public function asignaciones()
    {
        return $this->hasMany(Asignacione::class, 'id_guia');
    }

    public function mensajeria()
    {
        return $this->hasMany(Mensajerium::class, 'id_guia');
    }

public function pedidos()
	{
		return $this->hasMany(Pedido::class, 'id_guia');
	}

    public function seguimientos()
    {
        return $this->hasMany(Seguimiento::class, 'id_guia');
    }
}
