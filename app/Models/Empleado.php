<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 * 
 * @property int $id
 * @property int|null $id_persona
 * @property string|null $codigo_empleado
 * @property string|null $cargo
 * @property Carbon|null $fecha_ingreso
 * @property bool|null $estado_activo
 * 
 * @property Persona|null $persona
 * @property Collection|Asignacione[] $asignaciones
 * @property Collection|Seguimiento[] $seguimientos
 *
 * @package App\Models
 */
class Empleado extends Model
{
	protected $table = 'empleados';
	public $timestamps = false;

	protected $casts = [
		'id_persona' => 'int',
		'fecha_ingreso' => 'datetime',
		'estado_activo' => 'bool'
	];

	protected $fillable = [
		'id_persona',
		'codigo_empleado',
		'cargo',
		'fecha_ingreso',
		'estado_activo'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_persona');
	}

	public function asignaciones()
	{
		return $this->hasMany(Asignacione::class, 'id_empleado');
	}

	public function seguimientos()
	{
		return $this->hasMany(Seguimiento::class, 'id_empleado_responsable');
	}
}
