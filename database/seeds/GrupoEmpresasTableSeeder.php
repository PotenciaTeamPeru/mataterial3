<?php

use Illuminate\Database\Seeder;
use App\GrupoEmpresa;

class GrupoEmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$grupos = new GrupoEmpresa;
		$grupos->id = "1";
		$grupos->numero_ruc = "20601107954";
		$grupos->propietario_id = "1";
		$grupos->nombre = "Grupo Camii EIRL";
		$grupos->save();

		$grupos = new GrupoEmpresa;
		$grupos->id = "2";
		$grupos->numero_ruc = "20448805124";
		$grupos->propietario_id = "2";
		$grupos->nombre = "Creaciones Camii EIRL";
		$grupos->save();

		$grupos = new GrupoEmpresa;
		$grupos->id = "3";
		$grupos->numero_ruc = "10422163170";
		$grupos->propietario_id = "1";
		$grupos->nombre = "Henry Alex Roque Quispe";
		$grupos->save();
		
		$grupos = new GrupoEmpresa;
		$grupos->id = "4";
		$grupos->numero_ruc = "10000000010";
		$grupos->propietario_id = "3";
		$grupos->nombre = "Diego Andre Roque Cruz";
		$grupos->save();
		
		$grupos = new GrupoEmpresa;
		$grupos->id = "5";
		$grupos->numero_ruc = "10000000011";
		$grupos->propietario_id = "4";
		$grupos->nombre = "Leylee Adriana Roque Cruz";
		$grupos->save();
		
		$grupos = new GrupoEmpresa;
		$grupos->id = "6";
		$grupos->numero_ruc = "10000000012";
		$grupos->propietario_id = "5";
		$grupos->nombre = "Camila Andrea Roque Cruz";
		$grupos->save();

		$grupos = new GrupoEmpresa;
		$grupos->id = "7";
		$grupos->numero_ruc = "10012216845";
		$grupos->propietario_id = "6";
		$grupos->nombre = "Carmen Quispe Gil";
		$grupos->save();

		$grupos = new GrupoEmpresa;
		$grupos->id = "8";
		$grupos->numero_ruc = "10000000013";
		$grupos->propietario_id = "7";
		$grupos->nombre = "Jaqueine Ambar Roque Quispe";
		$grupos->save();

		$grupos = new GrupoEmpresa;
		$grupos->id = "9";
		$grupos->numero_ruc = "00000000000";
		$grupos->propietario_id = "10";
		$grupos->nombre = "Mercado Libre";
		$grupos->save();

		$grupos = new GrupoEmpresa;
		$grupos->id = "10";
		$grupos->numero_ruc = "00000000001";
		$grupos->propietario_id = "10";
		$grupos->nombre = "Sin Nombre";
		$grupos->save();

    }
}
