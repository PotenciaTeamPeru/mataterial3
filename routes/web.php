<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('dashboard', 'AdminController@index')->name('dashboard');

Route::resource('bancos', 'BancoController');
Route::resource('cuentas', 'CuentaController');
Route::resource('titulares', 'TitulareController');
Route::resource('depositos', 'DepositoController');

Route::resource('detalle', 'DetalleController');
Route::resource('caracteristica', 'CaracteristicaController');

Route::resource('compras', 'CompraController');
Route::resource('ventas', 'VentaController');

Route::resource('envioinformacion', 'EnvioInformacionController');
Route::resource('enviodetalle', 'EnvioDetalleController');

Route::resource('proveedores', 'ProveedoreController');
Route::resource('empresas', 'EmpresaController');
Route::resource('razonsocial', 'RazonSocialController');
Route::resource('marcas', 'MarcaController');

Route::resource('preciocompra', 'PrecioCompraController');
Route::resource('precioventa', 'PrecioVentaController');

Route::resource('novedades', 'NovedadeController');

/*
	* fuentes de ajax para deposito select	
*/

//Route::get('/indonesia','DepositoController@listEmpresas');
Route::get('/json-proveedores','DepositoController@listProveedores');
Route::get('/json-cuentas','DepositoController@listCuentas');

/*
	* fuentes de ajax para deposito select	
*/
