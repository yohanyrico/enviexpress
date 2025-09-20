<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Permiso
 * 
 * @property int $id_permiso
 * @property string $nombre_permiso
 * @property string|null $descripcion
 * 
 * @property Collection|Role[] $roles
 *
 * @package App\Models
 */
class Permiso extends Model
{
	protected $table = 'permisos';
	protected $primaryKey = 'id_permiso';
	public $timestamps = false;

	protected $fillable = [
		'nombre_permiso',
		'descripcion'
	];

	public function roles()
	{
		return $this->belongsToMany(Role::class, 'roles_permisos', 'id_permiso', 'id_rol')
					->withPivot('id');
	}
}
