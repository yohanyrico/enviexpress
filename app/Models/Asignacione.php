<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Asignacione
 * 
 * @property int $id
 * @property int|null $id_guia
 * @property int|null $id_vehiculo
 * @property int|null $id_empleado
 * @property Carbon|null $fecha_asignacion
 * @property string|null $estado_asignacion
 * @property string|null $observaciones
 * 
 * @property Guia|null $guia
 * @property Vehiculo|null $vehiculo
 * @property Empleado|null $empleado
 *
 * @package App\Models
 */
class Asignacione extends Model
{
	protected $table = 'asignaciones';
	public $timestamps = false;

	protected $casts = [
		'id_guia' => 'int',
		'id_vehiculo' => 'int',
		'id_empleado' => 'int',
		'fecha_asignacion' => 'datetime'
	];

	protected $fillable = [
		'id_guia',
		'id_vehiculo',
		'id_empleado',
		'fecha_asignacion',
		'estado_asignacion',
		'observaciones'
	];

	public function guia()
	{
		return $this->belongsTo(Guia::class, 'id_guia');
	}

	public function vehiculo()
	{
		return $this->belongsTo(Vehiculo::class, 'id_vehiculo');
	}

	public function empleado()
	{
		return $this->belongsTo(Empleado::class, 'id_empleado');
	}
}
