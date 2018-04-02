@extends('admin.layout')

@section('content')

<div>
   <div class="container-fluid">

		<div class=" col-sm-12 col-md-12 col-lg-12 ">
		   <div class="card">
		      <div class="card-content">
					<ul class="nav nav-pills nav-pills-icons nav-pills-primary">

		            <li class="{{ request()->is('depositos') ? 'active' : ''}}">
		               <a href="{{ route ('depositos.index')}}">
		                  <i class="material-icons">local_atm</i>
		                  Depositos
		               </a>
		            </li>
		            <li class="{{ request()->is('bancos') ? 'active' : ''}}">
		               <a href="{{ route ('bancos.index')}}">
		                  <i class="material-icons">business</i>
		                  Bancos
		                </a>
		            </li>
		            <li class="{{ request()->is('cuentas') ? 'active' : ''}}">
		               <a href="{{ route ('cuentas.index')}}">
		                  <i class="material-icons">storage</i>
		                  Cuentas
		               </a>
		            </li>
		            <li class="{{ request()->is('titulares') ? 'active' : ''}}">
		               <a href="{{ route ('titulares.index')}}">
		                  <i class="material-icons">supervisor_account</i>
		                  Titulares
		               </a>
		            </li>
		         </ul>
		      </div>
		   </div>
		</div>

     @include ('admin.sections.tables.tab-titular')
         @yield('tabla')  

   </div>
</div>

@endsection
