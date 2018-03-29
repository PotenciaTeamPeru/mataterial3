<?php

use Illuminate\Database\Seeder;
use App\PropietarioDireccion;

class PropietarioDireccionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$direccions = new PropietarioDireccion;	
		$direccions->id = "1";
		$direccions->propietario_id = "1";
		$direccions->pais = "Peru";
		$direccions->departamento = "Puno - Chucuito - Desaguadero";
		$direccions->direccion = "Avenida Panamericana 219";
		$direccions->tipo_uso = "Comercial";
		$direccions->save();

		$direccions = new PropietarioDireccion;
		$direccions->id = "2";
		$direccions->propietario_id = "2";
		$direccions->pais = "Peru";
		$direccions->departamento = "Puno - Chucuito - Desaguadero";
		$direccions->direccion = "Avenida Panamericana 219";
		$direccions->tipo_uso = "Comercial";
		$direccions->save();

		$direccions = new PropietarioDireccion;
		$direccions->id = "3";
		$direccions->propietario_id = "3";
		$direccions->pais = "Peru";
		$direccions->departamento = "Puno - Chucuito - Desaguadero";
		$direccions->direccion = "Jiron Natividad 178";
		$direccions->tipo_uso = "Comercial";
		$direccions->save();

		$direccions = new PropietarioDireccion;
		$direccions->id = "4";
		$direccions->propietario_id = "4";
		$direccions->pais = "Peru";
		$direccions->departamento = "Puno - Chucuito - Desaguadero";
		$direccions->direccion = "Avenida Panamericana 219";
		$direccions->tipo_uso = "Comercial";
		$direccions->save();


    }
}
