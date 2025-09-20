<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Seguimiento
 * 
 * @property int $id
 * @property int|null $id_guia
 * @property Carbon|null $fecha_evento
 * @property string|null $ubicacion_actual
 * @property string|null $estado_evento
 * @property string|null $observaciones
 * @property int|null $id_empleado_responsable
 * @property string|null $evidencia_foto
 * 
 * @property Guia|null $guia
 * @property Empleado|null $empleado
 *
 * @package App\Models
 */
class Seguimiento extends Model
{
	protected $table = 'seguimiento';
	public $timestamps = false;

	protected $casts = [
		'id_guia' => 'int',
		'fecha_evento' => 'datetime',
		'id_empleado_responsable' => 'int'
	];

	protected $fillable = [
		'id_guia',
		'fecha_evento',
		'ubicacion_actual',
		'estado_evento',
		'observaciones',
		'id_empleado_responsable',
		'evidencia_foto'
	];

	public function guia()
	{
		return $this->belongsTo(Guia::class, 'id_guia');
	}

	public function empleado()
	{
		return $this->belongsTo(Empleado::class, 'id_empleado_responsable');
	}
}
