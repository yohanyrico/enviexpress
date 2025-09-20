<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Guia
 * 
 * @property int $id
 * @property string|null $numero_guia
 * @property string|null $qr_code
 * @property string|null $tipo_servicio
 * @property int|null $id_remitente
 * @property int|null $id_destinatario
 * @property float|null $peso_total_kg
 * @property float|null $valor_declarado
 * @property Carbon|null $fecha_creacion
 * @property string|null $estado_actual
 * @property string|null $observaciones
 * 
 * @property Persona|null $persona
 * @property Collection|Asignacione[] $asignaciones
 * @property Collection|Mensajerium[] $mensajeria
 * @property Collection|Pedido[] $pedidos
 * @property Collection|Seguimiento[] $seguimientos
 *
 * @package App\Models
 */
class Guia extends Model
{
	protected $table = 'guias';
	public $timestamps = false;

	protected $casts = [
		'id_remitente' => 'int',
		'id_destinatario' => 'int',
		'peso_total_kg' => 'float',
		'valor_declarado' => 'float',
		'fecha_creacion' => 'datetime'
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
		'observaciones'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_destinatario');
	}

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
