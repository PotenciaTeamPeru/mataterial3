<?php

use Illuminate\Database\Seeder;
use App\ProductoNombre;

class ProductoNombresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		ProductoNombre::truncate();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB50|ML20|EE10|TT30|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga larga|Algodon Jersey|Estampado Cobertura|8-10-12|Bolsa";
		$nombres->nombre_corto = "Polo m/lrg|Jersey|Estamp|8-12|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB50|ML20|EC10|TT30|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga larga|Algodon Jersey|Color Entero Logo|8-10-12|Bolsa";
		$nombres->nombre_corto = "Polo m/lrg|Jersey|Logo|8-12|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB60|ML20|EE10|TT30|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga corta|Algodon Jersey|Estampado Cobertura|8-10-12|Bolsa";
		$nombres->nombre_corto = "Polo m/crt|Jersey|Estamp|8-12|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB60|ML20|EC10|TT30|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga corta|Algodon Jersey|Color Entero Logo|8-10-12|Bolsa";
		$nombres->nombre_corto = "Polo m/crt|Jersey|Logo|8-12|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB61|ML20|EE10|TT30|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga cero|Algodon Jersey|Estampado Cobertura|8-10-12|Bolsa";
		$nombres->nombre_corto = "Polo m/0|Jersey|Estamp|8-12|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB61|ML20|EC10|TT30|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga cero|Algodon Jersey|Color Entero Logo|8-10-12|Bolsa";
		$nombres->nombre_corto = "Polo m/0|Jersey|Logo|8-12|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB50|ML20|EE11|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga larga|Algodon Jersey|Blanco Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/lrg|Jersey|Blanco estamp|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB50|ML20|EE10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga larga|Algodon Jersey|Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/lrg|Jersey|Estamp|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB50|ML20|EC20|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga larga|Algodon Jersey|Color Entero Logo|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/lrg|Jersey|Logo|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB60|ML20|EE11|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga corta|Algodon Jersey|Blanco Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/crt|Jersey|Blanco estamp|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB60|ML20|EE10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga corta|Algodon Jersey|Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/crt|Jersey|Estamp|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB60|ML20|EC20|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga corta|Algodon Jersey|Color Entero Logo|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/crt|Jersey|Logo|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB61|ML20|EE11|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga cero|Algodon Jersey|Blanco Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/0|Jersey|Blanco estamp|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB61|ML20|EE10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga cero|Algodon Jersey|Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/0|Jersey|Estamp|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB61|ML20|EC20|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga cero|Algodon Jersey|Color Entero Logo|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/0|Jersey|Logo|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB50|ML20|EE11|TU11|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga larga|Algodon Jersey|Blanco Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Polo m/lrg|Jersey|Blanco estamp|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB50|ML20|EE10|TT11|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga larga|Algodon Jersey|Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Polo m/lrg|Jersey|Estamp|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB50|ML20|EC20|TT11|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga larga|Algodon Jersey|Color Entero Logo|1|Bolsa";
		$nombres->nombre_corto = "Polo m/lrg|Jersey|Logo|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB60|ML20|EE11|TU11|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga corta|Algodon Jersey|Blanco Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Polo m/crt|Jersey|Blanco estamp|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB60|ML20|EE10|TT11|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga corta|Algodon Jersey|Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Polo m/crt|Jersey|Estamp|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB60|ML20|EC20|TT11|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga corta|Algodon Jersey|Color Entero Logo|1|Bolsa";
		$nombres->nombre_corto = "Polo m/crt|Jersey|Logo|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB61|ML20|EE11|TU11|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga cero|Algodon Jersey|Blanco Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Polo m/0|Jersey|Blanco estamp|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB61|ML20|EC20|TT11|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga cero|Algodon Jersey|Color Entero Logo|1|Bolsa";
		$nombres->nombre_corto = "Polo m/0|Jersey|Logo|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB61|ML20|EE10|TT11|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga cero|Algodon Jersey|Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Polo m/0|Jersey|Estamp|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|ML20|EE10|TT30|PL50";
		$nombres->nombre_extendido = "Pieza Pantalon|Algodon Jersey|Estampado Cobertura|8-10-12|Bolsa";
		$nombres->nombre_corto = "Pantalon|Jersey|Estamp|8-12|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|ML20|EC10|TT30|PL50";
		$nombres->nombre_extendido = "Pieza Pantalon|Algodon Jersey|Color Entero Logo|8-10-12|Bolsa";
		$nombres->nombre_corto = "Pantalon|Jersey|Logo|8-12|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|ML20|EE10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Pantalon|Algodon Jersey|Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pantalon|Jersey|Estamp|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|ML20|EC20|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Pantalon|Algodon Jersey|Color Entero Logo|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pantalon|Jersey|Logo|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|ML20|EE10|TT11|PL50";
		$nombres->nombre_extendido = "Pieza Pantalon|Algodon Jersey|Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Pantalon|Jersey|Estamp|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|ML20|EC20|TT11|PL50";
		$nombres->nombre_extendido = "Pieza Pantalon|Algodon Jersey|Color Entero Logo|1|Bolsa";
		$nombres->nombre_corto = "Pantalon|Jersey|Logo|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB90|ML20|EE10|TT30|PL50";
		$nombres->nombre_extendido = "Pieza Short|Algodon Jersey|Estampado Cobertura|8-10-12|Bolsa";
		$nombres->nombre_corto = "Short|Jersey|Estamp|8-12|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB90|ML20|EC10|TT30|PL50";
		$nombres->nombre_extendido = "Pieza Short|Algodon Jersey|Color Entero Logo|8-10-12|Bolsa";
		$nombres->nombre_corto = "Short|Jersey|Logo|8-12|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB90|ML20|EE10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Short|Algodon Jersey|Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Short|Jersey|Estamp|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB90|ML20|EC20|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Short|Algodon Jersey|Color Entero Logo|2-4-6|Bolsa";
		$nombres->nombre_corto = "Short|Jersey|Logo|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB90|ML20|EE10|TT11|PL50";
		$nombres->nombre_extendido = "Pieza Short|Algodon Jersey|Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Short|Jersey|Estamp|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB90|ML20|EC20|TT11|PL50";
		$nombres->nombre_extendido = "Pieza Short|Algodon Jersey|Color Entero Logo|1|Bolsa";
		$nombres->nombre_corto = "Short|Jersey|Logo|1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|ML20|EE10|TT30|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Algodon Jersey|Estampado Cobertura|8-10-12|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Jersey|Estamp|8-12|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|ML20|EC10|TT30|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Algodon Jersey|Color Entero Logo|8-10-12|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Jersey|Logo|8-12|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|ML20|EE11|TT20|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Algodon Jersey|Blanco Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Jersey|Blanco estamp|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|ML20|EE10|TT20|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Algodon Jersey|Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Jersey|Estamp|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|ML20|EC10|TT20|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Algodon Jersey|Color Entero Logo|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Jersey|Logo|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|ML20|EE11|TU11|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Algodon Jersey|Blanco Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Jersey|Blanco estamp|1|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|ML20|EE10|TU11|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Algodon Jersey|Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Jersey|Estamp|1|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|ML20|EC10|TU11|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Algodon Jersey|Color Entero Logo|1|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Jersey|Logo|1|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP31|ML20|EE10|TT30|PL50";
		$nombres->nombre_extendido = "Pijama corto - Polo - Short|Algodon Jersey|Estampado Cobertura|8-10-12|Bolsa";
		$nombres->nombre_corto = "Pijama Polo Short|Jersey|Estamp|8-12|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP31|ML20|EC10|TT30|PL50";
		$nombres->nombre_extendido = "Pijama corto - Polo - Short|Algodon Jersey|Color Entero Logo|8-10-12|Bolsa";
		$nombres->nombre_corto = "Pijama Polo Short|Jersey|Logo|8-12|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP31|ML20|EE11|TT20|PL50";
		$nombres->nombre_extendido = "Pijama corto - Polo - Short|Algodon Jersey|Blanco Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pijama Polo Short|Jersey|Blanco estamp|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP31|ML20|EE10|TT20|PL50";
		$nombres->nombre_extendido = "Pijama corto - Polo - Short|Algodon Jersey|Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pijama Polo Short|Jersey|Estamp|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP31|ML20|EC10|TT20|PL50";
		$nombres->nombre_extendido = "Pijama corto - Polo - Short|Algodon Jersey|Color Entero Logo|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pijama Polo Short|Jersey|Logo|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP31|ML20|EE11|TU11|PL50";
		$nombres->nombre_extendido = "Pijama corto - Polo - Short|Algodon Jersey|Blanco Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Pijama Polo Short|Jersey|Blanco estamp|1|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP31|ML20|EE10|TU11|PL50";
		$nombres->nombre_extendido = "Pijama corto - Polo - Short|Algodon Jersey|Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Pijama Polo Short|Jersey|Estamp|1|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP31|ML20|EC10|TU11|PL50";
		$nombres->nombre_extendido = "Pijama corto - Polo - Short|Algodon Jersey|Color Entero Logo|1|Bolsa";
		$nombres->nombre_corto = "Pijama Polo Short|Jersey|Logo|1|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP40|ML20|EE10|TT30|PL50";
		$nombres->nombre_extendido = "Pijama corto - Solera - Short|Algodon Jersey|Estampado Cobertura|8-10-12|Bolsa";
		$nombres->nombre_corto = "Pijama Solera Short|Jersey|Estamp|8-12|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP40|ML20|EC10|TT30|PL50";
		$nombres->nombre_extendido = "Pijama corto - Solera - Short|Algodon Jersey|Color Entero Logo|8-10-12|Bolsa";
		$nombres->nombre_corto = "Pijama Solera Short|Jersey|Logo|8-12|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP40|ML20|EE11|TT20|PL50";
		$nombres->nombre_extendido = "Pijama corto - Solera - Short|Algodon Jersey|Blanco Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pijama Solera Short|Jersey|Blanco estamp|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP40|ML20|EE10|TT20|PL50";
		$nombres->nombre_extendido = "Pijama corto - Solera - Short|Algodon Jersey|Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pijama Solera Short|Jersey|Estamp|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP40|ML20|EC10|TT20|PL50";
		$nombres->nombre_extendido = "Pijama corto - Solera - Short|Algodon Jersey|Color Entero Logo|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pijama Solera Short|Jersey|Logo|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP40|ML20|EE11|TU11|PL50";
		$nombres->nombre_extendido = "Pijama corto - Solera - Short|Algodon Jersey|Blanco Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Pijama Solera Short|Jersey|Blanco estamp|1|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP40|ML20|EE10|TU11|PL50";
		$nombres->nombre_extendido = "Pijama corto - Solera - Short|Algodon Jersey|Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Pijama Solera Short|Jersey|Estamp|1|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP40|ML20|EC10|TU11|PL50";
		$nombres->nombre_extendido = "Pijama corto - Solera - Short|Algodon Jersey|Color Entero Logo|1|Bolsa";
		$nombres->nombre_corto = "Pijama Solera Short|Jersey|Logo|1|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|MR50|EE11|TT20|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Franela Economica|Blanco Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Franela|Blanco estamp|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|MR50|EE10|TT20|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Franela Economica|Estampado Cobertura|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Franela|Estamp|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|MR50|EC10|TT20|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Franela Economica|Color Entero Logo|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Franela|Logo|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|MR50|EE11|TU11|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Franela Economica|Blanco Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Franela|Blanco estamp|1|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|MR50|EE10|TU11|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Franela Economica|Estampado Cobertura|1|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Franela|Estamp|1|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|MR50|EC10|TU11|PL50";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Franela Economica|Color Entero Logo|1|Bolsa";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Franela|Logo|1|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EE10|TU10|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Estampado Cobertura|0|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Estamp|0|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EE10|TU11|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Estampado Cobertura|1|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Estamp|1|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EE10|TU12|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Estampado Cobertura|2|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Estamp|2|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EE10|TU13|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Estampado Cobertura|4|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Estamp|4|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EE10|TU14|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Estampado Cobertura|6|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Estamp|6|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EE10|TU15|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Estampado Cobertura|8|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Estamp|8|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EE10|TU16|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Estampado Cobertura|10|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Estamp|10|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EE10|TU17|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Estampado Cobertura|12|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Estamp|12|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EC10|TU10|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Color Entero Logo|0|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Logo|0|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EC10|TU11|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Color Entero Logo|1|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Logo|1|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EC10|TU12|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Color Entero Logo|2|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Logo|2|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EC10|TU13|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Color Entero Logo|4|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Logo|4|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EC10|TU14|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Color Entero Logo|6|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Logo|6|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EC10|TU15|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Color Entero Logo|8|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Logo|8|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EC10|TU16|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Color Entero Logo|10|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Logo|10|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MR50|EC10|TU17|PG10";
		$nombres->nombre_extendido = "Pieza Pantalon|Franela Economica|Color Entero Logo|12|A granel";
		$nombres->nombre_corto = "Pantalon|Franela|Logo|12|granel";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IF10|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set Niño largo - Chaqueta - Gorro - Pantalon - Polo - Polquitoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niño lrg Chaqueta Gorro Pantalon Polo Polquitosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "II31|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Yamper - Sombrero - Pantalon - Body - Polquitoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Yamper Sombrero Pantalon Body Polquitosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB10|ML10|EE11|TT10|PL50";
		$nombres->nombre_extendido = "Pieza Body manga larga|Algodon Pyma|Blanco Estampado Cobertura|1-2-4|Bolsa";
		$nombres->nombre_corto = "Body m/lrg|Pyma|Blanco estamp|1-2-4|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB20|ML10|EE11|TT10|PL50";
		$nombres->nombre_extendido = "Pieza Body manga corta|Algodon Pyma|Blanco Estampado Cobertura|1-2-4|Bolsa";
		$nombres->nombre_corto = "Body m/crt|Pyma|Blanco estamp|1-2-4|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|ML10|EW20|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Pantalon|Algodon Pyma|Rayado Bordado|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pantalon|Pyma|Ray Bordado|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|ML10|EW10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Pantalon|Algodon Pyma|Estampado Bordado|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pantalon|Pyma|Estamp Bordado|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|ML10|EB10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Pantalon|Algodon Pyma|Color Entero Bordado|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pantalon|Pyma|Color Bordado|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IS10|MF30|EB10|TU11|PE10";
		$nombres->nombre_extendido = "Set de baño - Toalla - Batita - Toalla de cara|Felpa Intermedia|Color Entero Bordado|1|Blister entero Individual";
		$nombres->nombre_corto = "Set de baño|Felpa|Color Bordado|1|Blister/ent";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IL11|ML10|EW10|TM13|PL10";
		$nombres->nombre_extendido = "Set Interior largo - Body - Pantalon - Gorro - Babero - Manoplas|Algodon Pyma|Estampado Bordado|3m|Bolsa Individual";
		$nombres->nombre_corto = "Set Body Pantalon Gorro Babero Manoplas|Pyma|Estamp Bordado|3m|Bolsa";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IL10|ML10|EW10|TM13|PL10";
		$nombres->nombre_extendido = "Set Interior largo - Body - Pantalon - Gorro - Babero - Polquitoslgodon Pyma|Estampado Bordado|3m|Bolsa Individual";
		$nombres->nombre_corto = "Set Body Pantalon Gorro Babero Polquitosyma|Estamp Bordado|3m|Bolsa";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA10|ML30|EB10|TU12|PH10";
		$nombres->nombre_extendido = "Ajuar Body largo - Pantalon - Gorro - Babero|Algodon Jersin|Color Entero Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Ajuar lrg Body Pantalon Gorro Babero|Jersin|Color Bordado|2|Gancho";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA20|ML20|ER10|TU12|PH10";
		$nombres->nombre_extendido = "Ajuar Chaqueta bebe larga - Bvd - Pantalon - Gorro - Babero|Algodon Jersey|Rayado |2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Ajuar Chaqueta bb Bvd Pantalon Gorro Babero|Jersey|Ray |2|Gancho";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE10|ML30|EW10|TU12|PH10";
		$nombres->nombre_extendido = "Enterizo largo - Gorro|Algodon Jersin|Estampado Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Enterizo lrg Gorro|Jersin|Estamp Bordado|2|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE10|ML30|EB10|TU12|PH10";
		$nombres->nombre_extendido = "Enterizo largo - Gorro|Algodon Jersin|Color Entero Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Enterizo lrg Gorro|Jersin|Color Bordado|2|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC40|ML30|EW10|TU12|PH10";
		$nombres->nombre_extendido = "Conjunto Polo corta - Short - Gorro|Algodon Jersin|Estampado Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto Polo Short Gorro|Jersin|Estamp Bordado|2|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC40|ML30|EW20|TU12|PH10";
		$nombres->nombre_extendido = "Conjunto Polo corta - Short - Gorro|Algodon Jersin|Rayado Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto Polo Short Gorro|Jersin|Ray Bordado|2|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC50|ML30|EW10|TU12|PH10";
		$nombres->nombre_extendido = "Conjunto Solera - Short - Gorro|Algodon Jersin|Estampado Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto Solera Short Gorro|Jersin|Estamp Bordado|2|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IV20|ML30|EB10|TU12|PH10";
		$nombres->nombre_extendido = "Vestido corto - Short|Algodon Jersin|Color Entero Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Vestido corto Short|Jersin|Color Bordado|2|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA21|ML20|EE11|TM10|PL10";
		$nombres->nombre_extendido = "Ajuar Chaleco Polo largo - Pantalon - Gorro - Babero|Algodon Jersey|Blanco Estampado Cobertura|0m|Bolsa Individual";
		$nombres->nombre_corto = "Ajuar Chaleco Polo Pantalon Gorro Babero|Jersey|Blanco estamp|0m|Bolsa";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA21|ML20|EE10|TM10|PL10";
		$nombres->nombre_extendido = "Ajuar Chaleco Polo largo - Pantalon - Gorro - Babero|Algodon Jersey|Estampado Cobertura|0m|Bolsa Individual";
		$nombres->nombre_corto = "Ajuar Chaleco Polo Pantalon Gorro Babero|Jersey|Estamp|0m|Bolsa";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA21|ML20|EL10|TM10|PL10";
		$nombres->nombre_extendido = "Ajuar Chaleco Polo largo - Pantalon - Gorro - Babero|Algodon Jersey|Color Entero Liso|0m|Bolsa Individual";
		$nombres->nombre_corto = "Ajuar Chaleco Polo Pantalon Gorro Babero|Jersey|Color|0m|Bolsa";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA20|ML20|EE11|TM10|PL10";
		$nombres->nombre_extendido = "Ajuar Chaqueta bebe larga - Bvd - Pantalon - Gorro - Babero|Algodon Jersey|Blanco Estampado Cobertura|0m|Bolsa Individual";
		$nombres->nombre_corto = "Ajuar Chaqueta bb Bvd Pantalon Gorro Babero|Jersey|Blanco estamp|0m|Bolsa";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA20|ML20|EE10|TM10|PL10";
		$nombres->nombre_extendido = "Ajuar Chaqueta bebe larga - Bvd - Pantalon - Gorro - Babero|Algodon Jersey|Estampado Cobertura|0m|Bolsa Individual";
		$nombres->nombre_corto = "Ajuar Chaqueta bb Bvd Pantalon Gorro Babero|Jersey|Estamp|0m|Bolsa";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA20|ML20|EL10|TM10|PL10";
		$nombres->nombre_extendido = "Ajuar Chaqueta bebe larga - Bvd - Pantalon - Gorro - Babero|Algodon Jersey|Color Entero Liso|0m|Bolsa Individual";
		$nombres->nombre_corto = "Ajuar Chaqueta bb Bvd Pantalon Gorro Babero|Jersey|Color|0m|Bolsa";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA30|ML20|EL10|TM10|PL10";
		$nombres->nombre_extendido = "Ajuar Chaqueta bebe larga - Bvd - Pantalon - Gorro - Babero - Ombliguero - Manoplas|Algodon Jersey|Color Entero Liso|0m|Bolsa Individual";
		$nombres->nombre_corto = "Ajuar Chaqueta bb Bvd Pantalon Gorro Babero Ombliguero Manoplas|Jersey|Color|0m|Bolsa";
		$nombres->numero_piezas = "7";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IM10|ML30|EW11|TM16|PE10";
		$nombres->nombre_extendido = "Pieza Mantita|Algodon Jersin|Blanco Estampado Bordado|6m|Blister entero Individual";
		$nombres->nombre_corto = "Mantita|Jersin|Blanco Estamp Bordado|6m|Blister/ent";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IT10|MF30|EW11|TM13|PE10";
		$nombres->nombre_extendido = "Toalla - Toalla de cara|Felpa Intermedia|Blanco Estampado Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Toalla Toalla de cara|Felpa|Blanco Estamp Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IT30|MF50|EB10|TM13|PE10";
		$nombres->nombre_extendido = "Toalla - Manopla - Toalla de cara - Peine - Babero|Felpa Economica|Color Entero Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Toalla Manopla Toalla de cara Peine Babero|Felpa|Color Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IY10|MF30|EB10|TU11|PH10";
		$nombres->nombre_extendido = "Batita de baño Capucha - Pantuflas|Felpa Intermedia|Color Entero Bordado|1|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Batita de baño Capucha Pantuflas|Felpa|Color Bordado|1|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IY20|MF30|EB10|TU11|PH10";
		$nombres->nombre_extendido = "Batita de baño Capucha|Felpa Intermedia|Color Entero Bordado|1|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Batita de baño Capucha|Felpa|Color Bordado|1|Gancho";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IY20|MF20|EB10|TU11|PH10";
		$nombres->nombre_extendido = "Batita de baño Capucha|Felpa San Jacinto|Color Entero Bordado|1|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Batita de baño Capucha|Felpa San Jacinto|Color Bordado|1|Gancho";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IY20|MF20|EB10|TT21|PL10";
		$nombres->nombre_extendido = "Batita de baño Capucha|Felpa San Jacinto|Color Entero Bordado|2-4-6-8|Bolsa Individual";
		$nombres->nombre_corto = "Batita de baño Capucha|Felpa San Jacinto|Color Bordado|2-6-8|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IR20|MP10|EB10|TU11|PE10";
		$nombres->nombre_extendido = "Ropon - Chaqueta - Gorro - Pantalon - Polquitosolar Micropolar|Color Entero Bordado|1|Blister entero Individual";
		$nombres->nombre_corto = "Ropon Chaqueta Gorro Pantalon Polquitosicropolar|Color Bordado|1|Blister/ent";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IR21|MP10|EB10|TU11|PE10";
		$nombres->nombre_extendido = "Ropon - Chaqueta Capucha - Pantalon - Polquitosolar Micropolar|Color Entero Bordado|1|Blister entero Individual";
		$nombres->nombre_corto = "Ropon Chaqueta Capucha Pantalon Polquitosicropolar|Color Bordado|1|Blister/ent";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IR30|MP10|EB10|TU11|PE10";
		$nombres->nombre_extendido = "Ropon - Chaqueta - Gorro - Pantalon - Manoplas|Polar Micropolar|Color Entero Bordado|1|Blister entero Individual";
		$nombres->nombre_corto = "Ropon Chaqueta Gorro Pantalon Manoplas|Micropolar|Color Bordado|1|Blister/ent";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IR31|MP10|EB10|TU11|PE10";
		$nombres->nombre_extendido = "Ropon - Chaqueta Capucha - Pantalon - Manoplas|Polar Micropolar|Color Entero Bordado|1|Blister entero Individual";
		$nombres->nombre_corto = "Ropon Chaqueta Capucha Pantalon Manoplas|Micropolar|Color Bordado|1|Blister/ent";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IU21|MF50|EC10|TM13|PL50";
		$nombres->nombre_extendido = "Pieza Mandil manga|Felpa Economica|Color Entero Logo|3m|Bolsa";
		$nombres->nombre_corto = "Mandil manga|Felpa|Logo|3m|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IU10|MF30|EB10|TM13|PL10";
		$nombres->nombre_extendido = "Pieza Babero|Felpa Intermedia|Color Entero Bordado|3m|Bolsa Individual";
		$nombres->nombre_corto = "Babero|Felpa|Color Bordado|3m|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IU10|MF30|EB10|TM13|PL50";
		$nombres->nombre_extendido = "Pieza Babero|Felpa Intermedia|Color Entero Bordado|3m|Bolsa";
		$nombres->nombre_corto = "Babero|Felpa|Color Bordado|3m|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IU50|MS10|EL10|TM10|PL10";
		$nombres->nombre_extendido = "Pieza Medias|Poliester|Color Entero Liso|0m|Bolsa Individual";
		$nombres->nombre_corto = "Medias|Poliester|Color|0m|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IU50|MS10|EL11|TM10|PL10";
		$nombres->nombre_extendido = "Pieza Medias|Poliester|Color Entero Citricos|0m|Bolsa Individual";
		$nombres->nombre_corto = "Medias|Poliester|Color Citricos|0m|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE10|MR50|EB10|TU12|PH10";
		$nombres->nombre_extendido = "Enterizo largo - Gorro|Franela Economica|Color Entero Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Enterizo lrg Gorro|Franela|Color Bordado|2|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE11|MR50|EB10|TU12|PH10";
		$nombres->nombre_extendido = "Enterizo largo Capucha|Franela Economica|Color Entero Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Enterizo lrg Capucha|Franela|Color Bordado|2|Gancho";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IU21|MF50|EB10|TM13|PL50";
		$nombres->nombre_extendido = "Pieza Mandil manga|Felpa Economica|Color Entero Bordado|3m|Bolsa";
		$nombres->nombre_corto = "Mandil manga|Felpa|Color Bordado|3m|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IU20|MF50|EB10|TM13|PL50";
		$nombres->nombre_extendido = "Pieza Mandil|Felpa Economica|Color Entero Bordado|3m|Bolsa";
		$nombres->nombre_corto = "Mandil|Felpa|Color Bordado|3m|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IU10|MF50|EB10|TM13|PL50";
		$nombres->nombre_extendido = "Pieza Babero|Felpa Economica|Color Entero Bordado|3m|Bolsa";
		$nombres->nombre_corto = "Babero|Felpa|Color Bordado|3m|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IH10|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set Niño largo - Chaqueta - Gorro - Pantalon - Body - Polquitoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niño lrg Chaqueta Gorro Pantalon Body Polquitosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "II10|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Campera - Gorro - Pantalon - Body - Polquitoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Campera Gorro Pantalon Body Polquitosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IG10|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Campera - Gorro - Pantalon - Polo - Polquitoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Campera Gorro Pantalon Polo Polquitosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IG31|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Yamper - Sombrero - Pantalon - Polo - Polquitoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Yamper Sombrero Pantalon Polo Polquitosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC40|ML30|EW10|TU11|PH10";
		$nombres->nombre_extendido = "Conjunto Polo corta - Short - Gorro|Algodon Jersin|Estampado Bordado|1|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto Polo Short Gorro|Jersin|Estamp Bordado|1|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC40|ML30|EW10|TT11|PH10";
		$nombres->nombre_extendido = "Conjunto Polo corta - Short - Gorro|Algodon Jersin|Estampado Bordado|2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto Polo Short Gorro|Jersin|Estamp Bordado|2-4|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB50|ML10|EB10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga larga|Algodon Pyma|Color Entero Bordado|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/lrg|Pyma|Color Bordado|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB50|ML10|EW10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga larga|Algodon Pyma|Estampado Bordado|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/lrg|Pyma|Estamp Bordado|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB50|ML10|EW20|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga larga|Algodon Pyma|Rayado Bordado|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/lrg|Pyma|Ray Bordado|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IV21|ML30|EB10|TU13|PH10";
		$nombres->nombre_extendido = "Vestido corto - Sniker|Algodon Jersin|Color Entero Bordado|4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Vestido Sniker|Jersin|Color Bordado|4|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IV20|MJ10|EB10|TU12|PH10";
		$nombres->nombre_extendido = "Vestido corto - Short|Jean - Economico|Color Entero Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Vestido Short|Jean Economico|Color Bordado|2|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB60|ML10|EB10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga corta|Algodon Pyma|Color Entero Bordado|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/crt|Pyma|Color Bordado|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB60|ML10|EW10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga corta|Algodon Pyma|Estampado Bordado|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/crt|Pyma|Estamp Bordado|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB60|ML10|EW20|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga corta|Algodon Pyma|Rayado Bordado|2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/crt|Pyma|Ray Bordado|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB90|ML20|ER10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Short|Algodon Jersey|Rayado |2-4-6|Bolsa";
		$nombres->nombre_corto = "Short|Jersey|Ray |2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|ML20|ER10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Pantalon|Algodon Jersey|Rayado |2-4-6|Bolsa";
		$nombres->nombre_corto = "Pantalon|Jersey|Ray |2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB50|ML20|ER10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga larga|Algodon Jersey|Rayado |2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/lrg|Jersey|Ray |2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB60|ML20|ER10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Polo manga corta|Algodon Jersey|Rayado |2-4-6|Bolsa";
		$nombres->nombre_corto = "Polo m/crt|Jersey|Ray |2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IO20|ML30|EB10|TU12|PH10";
		$nombres->nombre_extendido = "Oberol corto - Polo corta - Gorro|Algodon Jersin|Color Entero Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Oberol Polo Gorro|Jersin|Color Bordado|2|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA10|ML30|EW20|TU12|PH10";
		$nombres->nombre_extendido = "Ajuar Body largo - Pantalon - Gorro - Babero|Algodon Jersin|Rayado Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Ajuar lrg Body Pantalon Gorro Babero|Jersin|Ray Bordado|2|Gancho";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IO20|MJ10|EB10|TU12|PH10";
		$nombres->nombre_extendido = "Oberol corto - Polo corta - Gorro|Jean - Economico|Color Entero Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Oberol Polo Gorro|Jean Economico|Color Bordado|2|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IX10|MZ10|EE20|TM13|PK20";
		$nombres->nombre_extendido = "Set - Caja|Carton - Mica|Figuras Cobertura|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Caja|Carton Mica|Figuras Cobertura|3m|Caja";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC50|ML30|EW10|TU11|PH10";
		$nombres->nombre_extendido = "Conjunto Solera - Short - Gorro|Algodon Jersin|Estampado Bordado|1|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto Solera Short Gorro|Jersin|Estamp Bordado|1|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC50|ML30|EW10|TT11|PH10";
		$nombres->nombre_extendido = "Conjunto Solera - Short - Gorro|Algodon Jersin|Estampado Bordado|2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto Solera Short Gorro|Jersin|Estamp Bordado|2-4|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IF20|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set Niño largo - Chaqueta - Gorro - Pantalon - Polo - Zapatoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niño lrg Chaqueta Gorro Pantalon Polo Zapatosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IF21|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set Niño largo - Chaqueta capucha - Pantalon - Polo - Zapatoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niño lrg Chaqueta capucha Pantalon Polo Zapatosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IG20|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Vestido - Gorro - Pantalon - Polo - Zapatoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Vestido Gorro Pantalon Polo Zapatosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IG21|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Vestido - Sombrero - Pantalon - Polo - Zapatoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Vestido Sombrero Pantalon Polo Zapatosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IG12|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Campera capucha - Pantalon - Polo - Zapatoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Campera capucha Pantalon Polo Zapatosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IH20|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set Niño largo - Chaqueta - Gorro - Pantalon - Body - Zapatoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niño lrg Chaqueta Gorro Pantalon Body Zapatosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IH21|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set Niño largo - Chaqueta capucha - Pantalon - Body - Zapatoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niño lrg Chaqueta capucha Pantalon Body Zapatosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "II20|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Vestido - Gorro - Pantalon - Body - Zapatoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Vestido Gorro Pantalon Body Zapatosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "II21|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Vestido - Sombrero - Pantalon - Body - Zapatoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Vestido Sombrero Pantalon Body Zapatosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "II32|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Yamper - Gorro - Pantalon - Body - Zapatoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Yamper Gorro Pantalon Body Zapatosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "II33|ML10|EW10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Yamper - Sombrero - Pantalon - Body - Zapatoslgodon Pyma|Estampado Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Yamper Sombrero Pantalon Body Zapatosyma|Estamp Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IL10|ML30|EE20|TM13|PL50";
		$nombres->nombre_extendido = "Set Interior largo - Body - Pantalon - Gorro - Babero - Polquitoslgodon Jersin|Figuras Cobertura|3m|Bolsa";
		$nombres->nombre_corto = "Set Body Pantalon Gorro Babero Polquitosersin|Figuras Cobertura|3m|Bolsa";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC30|ML30|EW10|TU12|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Gorro|Algodon Jersin|Estampado Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Gorro|Jersin|Estamp Bordado|2|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC31|ML30|EW10|TU12|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Capucha|Algodon Jersin|Estampado Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Capucha|Jersin|Estamp Bordado|2|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IL20|ML10|EW10|TM13|PL10";
		$nombres->nombre_extendido = "Set Interior largo - Body - Pantalon - Gorro - Polquitoslgodon Pyma|Estampado Bordado|3m|Bolsa Individual";
		$nombres->nombre_corto = "Set Body Pantalon Gorro Polquitosyma|Estamp Bordado|3m|Bolsa";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IL21|ML10|EW10|TM13|PL10";
		$nombres->nombre_extendido = "Set Interior largo - Body - Pantalon - Gorro - Manoplas|Algodon Pyma|Estampado Bordado|3m|Bolsa Individual";
		$nombres->nombre_corto = "Set Body Pantalon Gorro Manoplas|Pyma|Estamp Bordado|3m|Bolsa";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IT40|MF50|EY31|TU11|PB10";
		$nombres->nombre_extendido = "Toalla - Manopla - Toalla de cara - Babero|Felpa Economica|Fondo Color - Cuadros - Bordado|1|Blister borde Individual";
		$nombres->nombre_corto = "Toalla Manopla Toalla de cara Babero|Felpa|Fondo Color Cuadros Bordado|1|Blister borde";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IT20|MF40|EB20|TU11|PE10";
		$nombres->nombre_extendido = "Toalla - Manopla - Toalla de cara|Felpa Intermedia|Color Entero Bordado - Aplicacion|1|Blister entero Individual";
		$nombres->nombre_corto = "Toalla Manopla Toalla de cara|Felpa|Color Bordado Aplicacion|1|Blister/ent";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IY10|MF20|EB20|TU11|PH10";
		$nombres->nombre_extendido = "Batita de baño Capucha - Pantuflas|Felpa San Jacinto|Color Entero Bordado - Aplicacion|1|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Batita de baño Capucha Pantuflas|Felpa San Jacinto|Color Bordado Aplicacion|1|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IR20|MX10|EB10|TU11|PE10";
		$nombres->nombre_extendido = "Ropon - Chaqueta - Gorro - Pantalon - Polquitosolar - Yacart|Color Entero Bordado|1|Blister entero Individual";
		$nombres->nombre_corto = "Ropon Chaqueta Gorro Pantalon Polquitosolar Yacart|Color Bordado|1|Blister/ent";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IR20|MX20|EB10|TU11|PE10";
		$nombres->nombre_extendido = "Ropon - Chaqueta - Gorro - Pantalon - Polquitosolar - Plush|Color Entero Bordado|1|Blister entero Individual";
		$nombres->nombre_corto = "Ropon Chaqueta Gorro Pantalon Polquitosolar Plush|Color Bordado|1|Blister/ent";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC30|MP10|EB10|TU12|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Gorro|Polar Micropolar|Color Entero Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Gorro|Micropolar|Color Bordado|2|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC31|MP10|EB10|TU12|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Capucha|Polar Micropolar|Color Entero Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Capucha|Micropolar|Color Bordado|2|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC31|MP10|EB10|TT11|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Capucha|Polar Micropolar|Color Entero Bordado|2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Capucha|Micropolar|Color Bordado|2-4|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC31|MP10|EB10|TU11|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Capucha|Polar Micropolar|Color Entero Bordado|1|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Capucha|Micropolar|Color Bordado|1|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC30|MP10|EB10|TU11|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Gorro|Polar Micropolar|Color Entero Bordado|1|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Gorro|Micropolar|Color Bordado|1|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC30|MP10|EB10|TT11|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Gorro|Polar Micropolar|Color Entero Bordado|2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Gorro|Micropolar|Color Bordado|2-4|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA21|ML10|EW11|TM13|PE10";
		$nombres->nombre_extendido = "Ajuar Chaleco Polo largo - Pantalon - Gorro - Babero|Algodon Pyma|Blanco Estampado Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Ajuar Chaleco Polo Pantalon Gorro Babero|Pyma|Blanco Estamp Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA21|ML30|EW20|TM13|PE10";
		$nombres->nombre_extendido = "Ajuar Chaleco Polo largo - Pantalon - Gorro - Babero|Algodon Jersin|Rayado Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Ajuar Chaleco Polo Pantalon Gorro Babero|Jersin|Ray Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA21|ML10|EW20|TM13|PE10";
		$nombres->nombre_extendido = "Ajuar Chaleco Polo largo - Pantalon - Gorro - Babero|Algodon Pyma|Rayado Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Ajuar Chaleco Polo Pantalon Gorro Babero|Pyma|Ray Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA21|ML10|EB10|TM13|PE10";
		$nombres->nombre_extendido = "Ajuar Chaleco Polo largo - Pantalon - Gorro - Babero|Algodon Pyma|Color Entero Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Ajuar Chaleco Polo Pantalon Gorro Babero|Pyma|Color Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA21|ML10|EW10|TM13|PE10";
		$nombres->nombre_extendido = "Ajuar Chaleco Polo largo - Pantalon - Gorro - Babero|Algodon Pyma|Estampado Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Ajuar Chaleco Polo Pantalon Gorro Babero|Pyma|Estamp Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IT20|MF50|EW20|TM13|PE10";
		$nombres->nombre_extendido = "Toalla - Manopla - Toalla de cara|Felpa Economica|Rayado Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Toalla Manopla Toalla de cara|Felpa|Ray Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IY20|MF50|EW20|TU11|PH10";
		$nombres->nombre_extendido = "Batita de baño Capucha|Felpa Economica|Rayado Bordado|1|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Batita de baño Capucha|Felpa|Ray Bordado|1|Gancho";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IY20|MF50|EY21|TU11|PH10";
		$nombres->nombre_extendido = "Batita de baño Capucha|Felpa Economica|Fondo Color - Rayado - Bordado|1|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Batita de baño Capucha|Felpa|Fondo Color Ray Bordado|1|Gancho";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IV20|ML30|EW10|TU11|PH10";
		$nombres->nombre_extendido = "Vestido corto - Short|Algodon Jersin|Estampado Bordado|1|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Vestido corto Short|Jersin|Estamp Bordado|1|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IT20|MF50|EY31|TM13|PE10";
		$nombres->nombre_extendido = "Toalla - Manopla - Toalla de cara|Felpa Economica|Fondo Color - Cuadros - Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Toalla Manopla Toalla de cara|Felpa|Fondo Color Cuadros Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB25|ML10|EE11|TT10|PL50";
		$nombres->nombre_extendido = "Pieza Body manga cero|Algodon Pyma|Blanco Estampado Cobertura|1-2-4|Bolsa";
		$nombres->nombre_corto = "Body m/0|Pyma|Blanco estamp|1-2-4|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB26|ML10|EE11|TT10|PL50";
		$nombres->nombre_extendido = "Pieza Body solera|Algodon Pyma|Blanco Estampado Cobertura|1-2-4|Bolsa";
		$nombres->nombre_corto = "Body solera|Pyma|Blanco estamp|1-2-4|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|ML20|EE13|TT50|PL10";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Algodon Jersey|Hueso Estampado Cobertura|4-6-8-10-12-14|Bolsa Individual";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Jersey|Hueso Estamp|4-6-8-12-14|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP31|ML20|EE13|TT50|PL10";
		$nombres->nombre_extendido = "Pijama corto - Polo - Short|Algodon Jersey|Hueso Estampado Cobertura|4-6-8-10-12-14|Bolsa Individual";
		$nombres->nombre_corto = "Pijama Polo Short|Jersey|Hueso Estamp|4-6-8-12-14|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IP22|ML10|EE13|TT20|PL10";
		$nombres->nombre_extendido = "Pijama largo - Polera - Pantalon|Algodon Pyma|Hueso Estampado Cobertura|2-4-6|Bolsa Individual";
		$nombres->nombre_corto = "Pijama Polera Pantalon|Pyma|Hueso Estamp|2-6|Bolsa";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IY10|MF40|EE11|TU11|PH10";
		$nombres->nombre_extendido = "Batita de baño Capucha - Pantuflas|Felpa Intermedia|Blanco Estampado Cobertura|1|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Batita de baño Capucha Pantuflas|Felpa|Blanco estamp|1|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IU20|MF40|EW20|TM13|PL50";
		$nombres->nombre_extendido = "Pieza Mandil|Felpa Intermedia|Rayado Bordado|3m|Bolsa";
		$nombres->nombre_corto = "Mandil|Felpa|Ray Bordado|3m|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IM10|ML20|EW10|TM13|PB10";
		$nombres->nombre_extendido = "Pieza Mantita|Algodon Jersey|Estampado Bordado|3m|Blister borde Individual";
		$nombres->nombre_corto = "Mantita|Jersey|Estamp Bordado|3m|Blister borde";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|ML20|ER10|TU11|PL50";
		$nombres->nombre_extendido = "Pieza Pantalon|Algodon Jersey|Rayado |1|Bolsa";
		$nombres->nombre_corto = "Pantalon|Jersey|Ray |1|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IX10|MZ10|EE20|TM19|PK20";
		$nombres->nombre_extendido = "Set - Caja|Carton - Mica|Figuras Cobertura|9m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Caja|Carton Mica|Figuras Cobertura|9m|Caja";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IU21|MF10|EW20|TM13|PL50";
		$nombres->nombre_extendido = "Pieza Mandil manga|Felpa Pyma|Rayado Bordado|3m|Bolsa";
		$nombres->nombre_corto = "Mandil m/lrg|Felpa Pyma|Ray Bordado|3m|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IU10|MF10|EB10|TM13|PL50";
		$nombres->nombre_extendido = "Pieza Babero|Felpa Pyma|Color Entero Bordado|3m|Bolsa";
		$nombres->nombre_corto = "Babero|Felpa Pyma|Color Bordado|3m|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB10|ML10|EE11|TM13|PB10";
		$nombres->nombre_extendido = "Pieza Body manga larga|Algodon Pyma|Blanco Estampado Cobertura|3m|Blister borde Individual";
		$nombres->nombre_corto = "Body m/lrg|Pyma|Blanco estamp|3m|Blister borde";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IF10|MY10|EB10|TM13|PK20";
		$nombres->nombre_extendido = "Set Niño largo - Chaqueta - Gorro - Pantalon - Polo - Polquitosacart Puntiel|Color Entero Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niño lrg Chaqueta Gorro Pantalon Polo Polquitosacart|Color Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IF11|MY10|EB10|TM13|PK20";
		$nombres->nombre_extendido = "Set Niño largo - Chaqueta capucha - Pantalon - Polo - Polquitosacart Puntiel|Color Entero Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niño lrg Chaqueta capucha Pantalon Polo Polquitosacart|Color Bordado|3m|Caja";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IG10|MY10|EB10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Campera - Gorro - Pantalon - Polo - Polquitosacart Puntiel|Color Entero Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Campera Gorro Pantalon Polo Polquitosacart|Color Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IG11|MY10|EB10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Campera capucha - Pantalon - Polo - Polquitosacart Puntiel|Color Entero Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Campera capucha Pantalon Polo Polquitosacart|Color Bordado|3m|Caja";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IG20|MY10|EB10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Vestido - Gorro - Pantalon - Polo - Zapatosacart Puntiel|Color Entero Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Vestido Gorro Pantalon Polo Zapatosacart|Color Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IG21|MY10|EB10|TM13|PK20";
		$nombres->nombre_extendido = "Set niña largo - Vestido - Sombrero - Pantalon - Polo - Zapatosacart Puntiel|Color Entero Bordado|3m|Caja - Mica - Base";
		$nombres->nombre_corto = "Set Niña lrg Vestido Sombrero Pantalon Polo Zapatosacart|Color Bordado|3m|Caja";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE10|MX20|EW10|TU12|PH10";
		$nombres->nombre_extendido = "Enterizo largo - Gorro|Polar - Plush|Estampado Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Enterizo lrg Gorro|Polar Plush|Estamp Bordado|2|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA20|MR50|EB10|TM13|PE10";
		$nombres->nombre_extendido = "Ajuar Chaqueta bebe larga - Bvd - Pantalon - Gorro - Babero|Franela Economica|Color Entero Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Ajuar Chaqueta bb Bvd Pantalon Gorro Babero|Franela|Color Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC30|MR50|EW10|TU12|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Gorro|Franela Economica|Estampado Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Gorro|Franela|Estamp Bordado|2|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC31|MR50|EW10|TU12|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Capucha|Franela Economica|Estampado Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Capucha|Franela|Estamp Bordado|2|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IO11|MR50|EW10|TU12|PH10";
		$nombres->nombre_extendido = "Oberol largo - Polera larga - Capucha|Franela Economica|Estampado Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Oberol lrg Polera Capucha|Franela|Estamp Bordado|2|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IO10|MR50|EW10|TU12|PH10";
		$nombres->nombre_extendido = "Oberol largo - Polera larga - Gorro|Franela Economica|Estampado Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Oberol lrg Polera Gorro|Franela|Estamp Bordado|2|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IU60|ML20|EE11|TM10|PL30";
		$nombres->nombre_extendido = "Pieza Manoplas|Algodon Jersey|Blanco Estampado Cobertura|0m|Bolsa Trio";
		$nombres->nombre_corto = "Manoplas|Jersey|Blanco estamp|0m|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE15|MR30|EE12|TT21|PL50";
		$nombres->nombre_extendido = "Enterizo largo|Franela Intermedia|Crema Estampado Cobertura|2-4-6-8|Bolsa";
		$nombres->nombre_corto = "Enterizo L|Franela|Crema Estamp|2-6-8|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IM10|MX20|EB10|TM13|PE10";
		$nombres->nombre_extendido = "Pieza Mantita|Polar - Plush|Color Entero Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Mantita|Polar Plush|Color Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE15|MR30|EE12|TT50|PL50";
		$nombres->nombre_extendido = "Enterizo largo|Franela Intermedia|Crema Estampado Cobertura|4-6-8-10-12-14|Bolsa";
		$nombres->nombre_corto = "Enterizo L|Franela|Crema Estamp|4-6-8-12-14|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB70|MT10|EB10|TT20|PL50";
		$nombres->nombre_extendido = "Pieza Pantalon|French Terry|Color Entero Bordado|2-4-6|Bolsa";
		$nombres->nombre_corto = "Pantalon|French Terry|Color Bordado|2-6|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA10|ML20|EE20|TM13|PE10";
		$nombres->nombre_extendido = "Ajuar Body largo - Pantalon - Gorro - Babero|Algodon Jersey|Figuras Cobertura|3m|Blister entero Individual";
		$nombres->nombre_corto = "Ajuar lrg Body Pantalon Gorro Babero|Jersey|Figuras Cobertura|3m|Blister/ent";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IY20|MF20|EB10|TT40|PL10";
		$nombres->nombre_extendido = "Batita de baño Capucha|Felpa San Jacinto|Color Entero Bordado|10-12-14|Bolsa Individual";
		$nombres->nombre_corto = "Batita de baño Capucha|Felpa San Jacinto|Color Bordado|10-12-14|Bolsa";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IF10|ML10|EW10|TM13|PL50";
		$nombres->nombre_extendido = "Set Niño largo - Chaqueta - Gorro - Pantalon - Polo - Polquitoslgodon Pyma|Estampado Bordado|3m|Bolsa";
		$nombres->nombre_corto = "Set Niño lrg Chaqueta Gorro Pantalon Polo Polquitosyma|Estamp Bordado|3m|Bolsa";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IF11|ML10|EW10|TM13|PL50";
		$nombres->nombre_extendido = "Set Niño largo - Chaqueta capucha - Pantalon - Polo - Polquitoslgodon Pyma|Estampado Bordado|3m|Bolsa";
		$nombres->nombre_corto = "Set Niño lrg Chaqueta capucha Pantalon Polo Polquitosyma|Estamp Bordado|3m|Bolsa";
		$nombres->numero_piezas = "4";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IG30|ML10|EW10|TM13|PL50";
		$nombres->nombre_extendido = "Set niña largo - Yamper - Gorro - Pantalon - Polo - Polquitoslgodon Pyma|Estampado Bordado|3m|Bolsa";
		$nombres->nombre_corto = "Set Niña lrg Yamper Gorro Pantalon Polo Polquitosyma|Estamp Bordado|3m|Bolsa";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IA21|ML10|EE11|TM13|PE10";
		$nombres->nombre_extendido = "Ajuar Chaleco Polo largo - Pantalon - Gorro - Babero|Algodon Pyma|Blanco Estampado Cobertura|3m|Blister entero Individual";
		$nombres->nombre_corto = "Ajuar Chaleco Polo Pantalon Gorro Babero|Pyma|Blanco estamp|3m|Blister/ent";
		$nombres->numero_piezas = "5";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB10|ML10|EE20|TT10|PH10";
		$nombres->nombre_extendido = "Pieza Body manga larga|Algodon Pyma|Figuras Cobertura|1-2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Body m/lrg|Pyma|Figuras Cobertura|1-2-4|Gancho";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB20|ML10|EE20|TT10|PH10";
		$nombres->nombre_extendido = "Pieza Body manga corta|Algodon Pyma|Figuras Cobertura|1-2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Body m/crt|Pyma|Figuras Cobertura|1-2-4|Gancho";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IB30|ML10|EE20|TT10|PH10";
		$nombres->nombre_extendido = "Pieza Bitle cuello alto|Algodon Pyma|Figuras Cobertura|1-2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Bitle|Pyma|Figuras Cobertura|1-2-4|Gancho";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE10|MP10|EB10|TU12|PH10";
		$nombres->nombre_extendido = "Enterizo largo - Gorro|Polar Micropolar|Color Entero Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Enterizo lrg Gorro|Micropolar|Color Bordado|2|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE11|MP10|EB10|TU12|PH10";
		$nombres->nombre_extendido = "Enterizo largo Capucha|Polar Micropolar|Color Entero Bordado|2|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Enterizo lrg Capucha|Micropolar|Color Bordado|2|Gancho";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IS10|MF10|EB10|TM16|PE10";
		$nombres->nombre_extendido = "Set de baño - Toalla - Batita - Toalla de cara|Felpa Pyma|Color Entero Bordado|6m|Blister entero Individual";
		$nombres->nombre_corto = "Set de baño|Felpa Pyma|Color Bordado|6m|Blister/ent";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE10|MH10|EB10|TT11|PH10";
		$nombres->nombre_extendido = "Enterizo largo - Gorro|Plush Nacional|Color Entero Bordado|2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Enterizo lrg Gorro|Plush|Color Bordado|2-4|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE11|MH10|EB10|TT11|PH10";
		$nombres->nombre_extendido = "Enterizo largo Capucha|Plush Nacional|Color Entero Bordado|2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Enterizo lrg Capucha|Plush|Color Bordado|2-4|Gancho";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC30|MH10|EB10|TT11|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Gorro|Plush Nacional|Color Entero Bordado|2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Gorro|Plush|Color Bordado|2-4|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC31|MH10|EB10|TT11|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Capucha|Plush Nacional|Color Entero Bordado|2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Capucha|Plush|Color Bordado|2-4|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE11|MH10|EW20|TT11|PH10";
		$nombres->nombre_extendido = "Enterizo largo Capucha|Plush Nacional|Rayado Bordado|2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Enterizo lrg Capucha|Plush|Ray Bordado|2-4|Gancho";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IE10|MH10|EW20|TT11|PH10";
		$nombres->nombre_extendido = "Enterizo largo - Gorro|Plush Nacional|Rayado Bordado|2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Enterizo lrg Gorro|Plush|Ray Bordado|2-4|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC31|MH10|EW20|TT11|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Capucha|Plush Nacional|Rayado Bordado|2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Capucha|Plush|Ray Bordado|2-4|Gancho";
		$nombres->numero_piezas = "2";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IC30|MH10|EW20|TT11|PH10";
		$nombres->nombre_extendido = "Conjunto Polera larga - Pantalon - Gorro|Plush Nacional|Rayado Bordado|2-4|Bolsa Individual - Gancho";
		$nombres->nombre_corto = "Conjunto lrg Polera Pantalon Gorro|Plush|Ray Bordado|2-4|Gancho";
		$nombres->numero_piezas = "3";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IM10|MX60|EB10|TM13|PE10";
		$nombres->nombre_extendido = "Pieza Mantita|Polar - Yersin|Color Entero Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Mantita|Polar Yersin|Color Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "1";
		$nombres->save();

		$nombres = new ProductoNombre;
		$nombres->codigo = "IM10|ML30|EW10|TM13|PE10";
		$nombres->nombre_extendido = "Pieza Mantita|Algodon Jersin|Estampado Bordado|3m|Blister entero Individual";
		$nombres->nombre_corto = "Mantita|Jersin|Estamp Bordado|3m|Blister/ent";
		$nombres->numero_piezas = "1";
		$nombres->save();




    }
}
