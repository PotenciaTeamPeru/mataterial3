<?php

use Illuminate\Database\Seeder;

class BancosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	 
		App\Banco::create([ 

			'id' => '1',
			'nombre' => 'Banco de Credito BCP',
			'acronimo' => 'BCP',
			'direccion' => 'Jr Lima 510',

			]);

		App\Banco::create([ 

			'id' => '2',
			'nombre' => 'Banco Interbank Peru',
			'acronimo' => 'INTB',
			'direccion' => 'Jr Lima 423 - 425',

			]);

		App\Banco::create([ 

			'id' => '3',
			'nombre' => 'Banco Scotiabank Peru',
			'acronimo' => 'SCOB',
			'direccion' => 'Jr Deustua 458',

			]);

		App\Banco::create([ 

			'id' => '4',
			'nombre' => 'Banco Continental Bbva',
			'acronimo' => 'BBVA',
			'direccion' => 'Jr Lima 400 - 411',

			]);

		App\Banco::create([ 

			'id' => '5',
			'nombre' => 'Banco Financiero',
			'acronimo' => 'FINB',
			'direccion' => 'Jr Deustua 318 - 320',

			]);

		App\Banco::create([ 

			'id' => '6',
			'nombre' => 'Banco MiBanco',
			'acronimo' => 'MIBA',
			'direccion' => 'Jr Puno 326 - 342',

			]);

		App\Banco::create([ 

			'id' => '7',
			'nombre' => 'Caja Municipal Cusco',
			'acronimo' => 'CCUZ',
			'direccion' => 'Jr Arequipa 346',

			]);

		App\Banco::create([ 

			'id' => '8',
			'nombre' => 'Caja Municipal Tacna',
			'acronimo' => 'CTAC',
			'direccion' => 'Jr Fermin Arbulu 153',

			]);

		App\Banco::create([ 

			'id' => '9',
			'nombre' => 'Caja Municipal Arequipa',
			'acronimo' => 'CAQP',
			'direccion' => 'Jr Arequipa 385',

			]);

    }
}
