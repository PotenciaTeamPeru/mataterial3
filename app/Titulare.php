<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulare extends Model

{

	//visualizar
	public function verEmpresa()
		{
			return $this->belongsTo('App\Empresa', 'empresa_id', 'id');
		}

}
