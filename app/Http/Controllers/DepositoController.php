<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Deposito;
use App\Empresa;
use App\Cuenta;
use App\Banco;
use App\Proveedore;

class DepositoController extends Controller
{

            /**
             *  funciones para listar en el from
             */
            /*public function visualEmpresa()
            {
                $lsempresas = Empresa::all();
                return view('indonesia', compact('lsempresas'));
            }
            */

            public function visualTitular()
            {
                $empresasid = Input::get('empresas_id');
                $lsproveedores = Proveedore::where('empresa_id', '=', $empresasid)->get();
                return response()->json($lsproveedores);
            }

            public function visualCuenta()
            {
                $proveedoresid = Input::get('proveedores_id');
                $lscuentas = Cuenta::where('proveedor_id', '=', $proveedoresid)->get();
                return response()->json($lscuentas);
            }

 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Guardar
          $depositos = Deposito::all();
           $empresas = Empresa::all();
            $cuentas = Cuenta::all();
             $bancos = Banco::all();
        $proveedores = Proveedore::all();


        //agregado
            $ltempresas = Empresa::pluck('nombre', 'id'); 
             $ltcuentas = Cuenta::pluck('numero_cuenta', 'id'); 
            $listempresas = Empresa::all();




        //Redireccionar
        return view('area.deposito.index', compact('depositos', 'empresas', 'cuentas', 'bancos', 'proveedores', 'ltempresas', 'ltcuentas', 'listempresas'));

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
