<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ubicacion
 * 
 * @property int $id
 * @property string|null $ciudad
 * @property string|null $departamento
 * @property string|null $pais
 * @property float|null $coordenadas_lat
 * @property float|null $coordenadas_lng
 * 
 * @property Collection|Persona[] $personas
 * @property Collection|Tarifa[] $tarifas
 *
 * @package App\Models
 */
class Ubicacion extends Model
{
	protected $table = 'ubicacion';
	public $timestamps = false;

	protected $casts = [
		'coordenadas_lat' => 'float',
		'coordenadas_lng' => 'float'
	];

	protected $fillable = [
		'ciudad',
		'departamento',
		'pais',
		'coordenadas_lat',
		'coordenadas_lng'
	];

	public function personas()
	{
		return $this->hasMany(Persona::class, 'id_ubicacion');
	}

	public function tarifas()
	{
		return $this->hasMany(Tarifa::class, 'ubicacion_destino');
	}
}
