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
 * @property int $usuarios_idusuarios
 * 
 * @property Usuario $usuario
 * @property Collection|Permiso[] $permisos
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	protected $primaryKey = 'id_rol';
	public $timestamps = false;

	protected $casts = [
		'usuarios_idusuarios' => 'int'
	];

	protected $fillable = [
		'nombre_rol',
		'usuarios_idusuarios'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'usuarios_idusuarios');
	}

	public function permisos()
	{
		return $this->belongsToMany(Permiso::class, 'roles_permisos', 'id_rol', 'id_permiso')
					->withPivot('id_rol_permiso');
	}
}
