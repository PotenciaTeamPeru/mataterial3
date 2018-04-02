<?php

namespace App\Http\Controllers;

use App\Deposito;
use App\Empresa;
use App\Cuenta;
use App\Proveedore;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DepositoController extends Controller
{
        /*
         *  funciones de conexion 
         *  con ajax para el form  
         *  de ingredso de depositos 
         */
            public function listEmpresas(){
            $lsempresas = Empresa::all();
            return view('area.deposito.indoindex', compact('lsempresas'));
            }

            public function listProveedores(){
            $vempresas_id = Input::get('vempresas_id');
            $jproveedores = Proveedore::where('empresa_id', '=', $vempresas_id)->get();
            return response()->json($jproveedores);
            }

            public function listCuentas(){
            $vcuentas = Input::get('vcuentas');
            $jcuentas = Cuenta::where('proveedor_id', '=', $vcuentas)->get();
            return response()->json($jcuentas);
            }

 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //  variables de uso en el form
           $empresas    = Empresa::all();
        //  variables de uso en el table
          $depositos    = Deposito::all();

         // devuelve la vista y envia variables a la vista
        return view('area.deposito.index', compact('depositos', 'empresas'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('area.deposito.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Guardar
        Deposito::create($request->all());
      
        //Redireccionar
        return redirect()->route('depositos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
