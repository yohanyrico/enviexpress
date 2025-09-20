<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolesPermiso
 * 
 * @property int $id
 * @property int|null $id_rol
 * @property int|null $id_permiso
 * 
 * @property Role|null $role
 * @property Permiso|null $permiso
 *
 * @package App\Models
 */
class RolesPermiso extends Model
{
	protected $table = 'roles_permisos';
	public $timestamps = false;

	protected $casts = [
		'id_rol' => 'int',
		'id_permiso' => 'int'
	];

	protected $fillable = [
		'id_rol',
		'id_permiso'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'id_rol');
	}

	public function permiso()
	{
		return $this->belongsTo(Permiso::class, 'id_permiso');
	}
}
