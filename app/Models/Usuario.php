<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $idusuarios
 * @property string $username
 * @property string $password
 * @property string|null $email
 * @property bool|null $estado
 * @property int|null $id_persona
 * 
 * @property Persona|null $persona
 * @property Collection|Role[] $roles
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'idusuarios';
	public $timestamps = false;

	protected $casts = [
		'estado' => 'bool',
		'id_persona' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password',
		'email',
		'estado',
		'id_persona'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_persona');
	}

	public function roles()
	{
		return $this->hasMany(Role::class, 'usuarios_idusuarios');
	}
}
