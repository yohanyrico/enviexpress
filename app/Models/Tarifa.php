<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarifa
 * 
 * @property int $id_tarifa
 * @property string|null $nombre_tarifa
 * @property int|null $id_ubicacion_origen
 * @property int|null $id_ubicacion_destino
 * @property string|null $tipo_servicio
 * @property float|null $peso_minimo_kg
 * @property float|null $peso_maximo_kg
 * @property float|null $tarifa_base
 * @property float|null $tarifa_adicional_kg
 * @property int|null $tiempo_entrega_horas
 * @property Carbon|null $vigencia_desde
 * @property Carbon|null $vigencia_hasta
 * 
 * @property Ubicacion|null $ubicacion
 *
 * @package App\Models
 */
class Tarifa extends Model
{
	protected $table = 'tarifas';
	protected $primaryKey = 'id_tarifa';
	public $timestamps = false;

	protected $casts = [
		'id_ubicacion_origen' => 'int',
		'id_ubicacion_destino' => 'int',
		'peso_minimo_kg' => 'float',
		'peso_maximo_kg' => 'float',
		'tarifa_base' => 'float',
		'tarifa_adicional_kg' => 'float',
		'tiempo_entrega_horas' => 'int',
		'vigencia_desde' => 'datetime',
		'vigencia_hasta' => 'datetime'
	];

	protected $fillable = [
		'nombre_tarifa',
		'id_ubicacion_origen',
		'id_ubicacion_destino',
		'tipo_servicio',
		'peso_minimo_kg',
		'peso_maximo_kg',
		'tarifa_base',
		'tarifa_adicional_kg',
		'tiempo_entrega_horas',
		'vigencia_desde',
		'vigencia_hasta'
	];

	public function ubicacion()
	{
		return $this->belongsTo(Ubicacion::class, 'id_ubicacion_destino');
	}

	public function origen()
	{
		return $this->belongsTo(Ubicacion::class, 'id_ubicacion_origen');
	}

	public function destino()
	{
		return $this->belongsTo(Ubicacion::class, 'id_ubicacion_destino');
	}

}

