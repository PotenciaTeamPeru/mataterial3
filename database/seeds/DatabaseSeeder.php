<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
	    $this->call([
	  
        BancosTableSeeder::class,
        EmpresasTableSeeder::class,
        PropietariosTableSeeder::class,
        GrupoEmpresasTableSeeder::class,
        MarcasTableSeeder::class,
        PropietarioDireccionsTableSeeder::class,
        RazonSocialsTableSeeder::class,
        UsersTableSeeder::class,
	  
	    ]);

    }
}
