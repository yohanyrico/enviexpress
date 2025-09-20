<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id_usuario
 * @property int|null $id_persona
 * @property string $username
 * @property string $password_hash
 * @property int|null $id_rol
 * @property bool|null $estado
 * 
 * @property Persona|null $persona
 * @property Role|null $role
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'id_usuario';
	public $timestamps = false;

	protected $casts = [
		'id_persona' => 'int',
		'id_rol' => 'int',
		'estado' => 'bool'
	];

	protected $fillable = [
		'id_persona',
		'username',
		'password_hash',
		'id_rol',
		'estado'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_persona');
	}

	public function role()
	{
		return $this->belongsTo(Role::class, 'id_rol');
	}
}
