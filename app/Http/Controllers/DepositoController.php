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

            public function visualProveedor()
            {
                $empresas_id = Input::get('empresas_id');
                $proveedores = Proveedore::where('empresa_id', '=', $empresas_id)->get();
                return response()->json($proveedores);
            }

            public function visualCuenta()
            {
                $proveedores_id = Input::get('proveedores_id');
                $cuentas = Cuenta::where('proveedor_id', '=', $proveedores_id)->get();
                return response()->json($cuentas);
            }




            public function provinces(){
            $provinces = Empresa::all();
            return view('area.deposito.indoindex', compact('provinces'));
            }

            public function regencies(){
            $provinces_id = Input::get('province_id');
            $regencies = Proveedore::where('empresa_id', '=', $provinces_id)->get();
            return response()->json($regencies);
            }

            public function districts(){
            $regencies_id = Input::get('regencies_id');
            $districts = Cuenta::where('proveedor_id', '=', $regencies_id)->get();
            return response()->json($districts);
            }

            public function villages(){
            $districts_id = Input::get('districts_id');
            $villages = Village::where('district_id', '=', $districts_id)->get();
            return response()->json($villages);
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
