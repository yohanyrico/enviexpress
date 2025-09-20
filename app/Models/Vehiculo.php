<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 * 
 * @property int $id
 * @property string|null $codigo_vehiculo
 * @property string|null $tipo_vehiculo
 * @property string|null $marca
 * @property string|null $modelo
 * @property Carbon|null $año
 * @property string|null $placa
 * @property float|null $capacidad_carga_kg
 * @property float|null $capacidad_volumen_m3
 * @property string|null $estado_vehiculo
 * @property string|null $propietario
 * 
 * @property Collection|Asignacione[] $asignaciones
 *
 * @package App\Models
 */
class Vehiculo extends Model
{
	protected $table = 'vehiculos';
	public $timestamps = false;

	protected $casts = [
		'año' => 'datetime',
		'capacidad_carga_kg' => 'float',
		'capacidad_volumen_m3' => 'float'
	];

	protected $fillable = [
		'codigo_vehiculo',
		'tipo_vehiculo',
		'marca',
		'modelo',
		'año',
		'placa',
		'capacidad_carga_kg',
		'capacidad_volumen_m3',
		'estado_vehiculo',
		'propietario'
	];

	public function asignaciones()
	{
		return $this->hasMany(Asignacione::class, 'id_vehiculo');
	}
}
