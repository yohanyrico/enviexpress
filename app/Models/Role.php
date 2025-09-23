<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id_rol
 * @property string $nombre_rol
 * 
 * @property Collection|Permiso[] $permisos
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	protected $primaryKey = 'id_rol';
	public $timestamps = false;

	protected $fillable = [
		'nombre_rol'
	];

	public function permisos()
	{
		return $this->belongsToMany(Permiso::class, 'roles_permisos', 'id_rol', 'id_permiso')
					->withPivot('id_rol_permiso');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_rol');
	}
}
