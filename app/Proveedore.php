<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{

	protected $fillable = ['nombres', 'apellido_paterno', 'apellido_materno', 'tipo_identificacion','numero_identificacion', 'empresa_id', 'cargo_parentezco'];


	// Funcion para reemplazar el id por el nombre de la Empresa

	public function verEmpresa()
		{
			return $this->belongsTo('App\Empresa', 'empresa_id', 'id');
		}


	public static function proveedores($id)
	{
		return Proveedore::where('empresa_id','=',$id)
		->get();
	}

}
