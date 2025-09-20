<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 * 
 * @property int $id
 * @property int|null $id_guia
 * @property string|null $tipo_pedido
 * @property string|null $descripcion_pedido
 * @property string|null $instrucciones_especiales
 * @property Carbon|null $fecha_programada
 * @property float|null $peso_kg
 * @property string|null $estado_pedido
 * 
 * @property Guia|null $guia
 *
 * @package App\Models
 */
class Pedido extends Model
{
	protected $table = 'pedidos';
	public $timestamps = false;

	protected $casts = [
		'id_guia' => 'int',
		'fecha_programada' => 'datetime',
		'peso_kg' => 'float'
	];

	protected $fillable = [
		'id_guia',
		'tipo_pedido',
		'descripcion_pedido',
		'instrucciones_especiales',
		'fecha_programada',
		'peso_kg',
		'estado_pedido'
	];

	public function guia()
	{
		return $this->belongsTo(Guia::class, 'id_guia');
	}
}
