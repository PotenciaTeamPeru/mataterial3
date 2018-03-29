<?php

use Illuminate\Database\Seeder;

use App\Propietario;

class PropietariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$propietarios = new Propietario;
		$propietarios->id = "1";
		$propietarios->nombres = "Henry Alex";
		$propietarios->apellido_paterno = "Roque";
		$propietarios->apellido_materno = "Quispe";
		$propietarios->numero_identificacion = "42216317";
		$propietarios->tipo_identificacion = "1";
		$propietarios->save();

		$propietarios = new Propietario;
		$propietarios->id = "2";
		$propietarios->nombres = "Norma";
		$propietarios->apellido_paterno = "Cruz";
		$propietarios->apellido_materno = "Chambi";
		$propietarios->numero_identificacion = "42145744";
		$propietarios->tipo_identificacion = "1";
		$propietarios->save();

		$propietarios = new Propietario;
		$propietarios->id = "3";
		$propietarios->nombres = "Diego Andre";
		$propietarios->apellido_paterno = "Roque";
		$propietarios->apellido_materno = "Cruz";
		$propietarios->numero_identificacion = "76841474";
		$propietarios->tipo_identificacion = "1";
		$propietarios->save();

		$propietarios = new Propietario;
		$propietarios->id = "4";
		$propietarios->nombres = "Leylee Adriana";
		$propietarios->apellido_paterno = "Roque";
		$propietarios->apellido_materno = "Cruz";
		$propietarios->numero_identificacion = "76841468";
		$propietarios->tipo_identificacion = "1";
		$propietarios->save();

		$propietarios = new Propietario;
		$propietarios->id = "5";
		$propietarios->nombres = "Camila Andrea";
		$propietarios->apellido_paterno = "Roque";
		$propietarios->apellido_materno = "Cruz";
		$propietarios->numero_identificacion = "77552635";
		$propietarios->tipo_identificacion = "1";
		$propietarios->save();

		$propietarios = new Propietario;
		$propietarios->id = "6";
		$propietarios->nombres = "Carmen";
		$propietarios->apellido_paterno = "Quispe";
		$propietarios->apellido_materno = "Gil";
		$propietarios->numero_identificacion = "01221684";
		$propietarios->tipo_identificacion = "1";
		$propietarios->save();

		$propietarios = new Propietario;
		$propietarios->id = "7";
		$propietarios->nombres = "Jaqueline";
		$propietarios->apellido_paterno = "Roque";
		$propietarios->apellido_materno = "Quispe";
		$propietarios->numero_identificacion = "1000001";
		$propietarios->tipo_identificacion = "1";
		$propietarios->save();

		$propietarios = new Propietario;
		$propietarios->id = "10";
		$propietarios->nombres = "cero";
		$propietarios->apellido_paterno = "cero";
		$propietarios->apellido_materno = "cero";
		$propietarios->numero_identificacion = "10000000";
		$propietarios->tipo_identificacion = "1";
		$propietarios->save();

    }
}
