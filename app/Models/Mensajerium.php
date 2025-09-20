<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mensajerium
 * 
 * @property int $id
 * @property int|null $id_guia
 * @property string|null $tipo_documento
 * @property string|null $codigo_mensaje
 * @property Carbon|null $fecha_envio
 * @property string|null $estado_entrega
 * @property string|null $observaciones
 * 
 * @property Guia|null $guia
 *
 * @package App\Models
 */
class Mensajerium extends Model
{
	protected $table = 'mensajeria';
	public $timestamps = false;

	protected $casts = [
		'id_guia' => 'int',
		'fecha_envio' => 'datetime'
	];

	protected $fillable = [
		'id_guia',
		'tipo_documento',
		'codigo_mensaje',
		'fecha_envio',
		'estado_entrega',
		'observaciones'
	];

	public function guia()
	{
		return $this->belongsTo(Guia::class, 'id_guia');
	}
}
