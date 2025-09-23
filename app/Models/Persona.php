<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 * 
 * @property int $id_persona
 * @property string|null $nombres
 * @property string|null $apellidos
 * @property string|null $documento_tipo
 * @property string|null $documento_numero
 * @property string|null $telefono_principal
 * @property string|null $email
 * @property int|null $id_ubicacion
 * @property string|null $tipo_persona
 * 
 * @property Ubicacion|null $ubicacion
 * @property Collection|Empleado[] $empleados
 * @property Collection|Guia[] $guias
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Persona extends Model
{
	protected $table = 'personas';
	protected $primaryKey = 'id_persona';
	public $timestamps = false;

	protected $casts = [
		'id_ubicacion' => 'int'
	];

	protected $fillable = [
		'nombres',
		'apellidos',
		'documento_tipo',
		'documento_numero',
		'telefono_principal',
		'email',
		'id_ubicacion',
		'tipo_persona'
	];

	public function ubicacion()
	{
		return $this->belongsTo(Ubicacion::class, 'id_ubicacion');
	}

	public function empleados()
	{
		return $this->hasMany(Empleado::class, 'id_persona');
	}

	public function guias()
	{
		return $this->hasMany(Guia::class, 'id_destinatario');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_persona');
	}
}
