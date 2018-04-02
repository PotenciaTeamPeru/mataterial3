<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposito extends Model

{

	protected $fillable = ['cuenta_id', 'monto', 'fecha_deposito'];


	// Funcion que reemplaza el ID x el nombre de la Empresa
	public function vBanco()
		{
			return $this->belongsTo('App\Banco', 'cuenta_id', 'id');
		}

	// Funcion que reemplaza el ID x el nombre del Proveedor
	public function vProveedor()
		{
			return $this->belongsTo('App\Proveedore', 'cuenta_id', 'id');
		}

}
