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
Route::get('/json-proveedores','DepositoController@visualProveedor');
Route::get('/json-cuentas','DepositoController@visualCuenta');

/*
	* fuentes de ajax para deposito select	
*/

Route::get('/indonesia','DepositoController@provinces');
Route::get('/json-regencies','DepositoController@regencies');
Route::get('/json-districts','DepositoController@districts');
Route::get('/json-village','DepositoController@villages');

/*
	* fuentes de ajax para deposito select	
*/


