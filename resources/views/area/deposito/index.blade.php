@extends('admin.layout')

@section('content')

<div>
	<div class="container-fluid">

		<div class="title-block">
			<h1 class="title"> Caracteristicas! </h1>
			<p class="title-description"> Ingreso y visualizacion ... </p>
		</div>
		
		<div class="">

    @include ('admin.sections.links.lnk-transaccion')

    @include ('admin.sections.forms.form-deposito')
	
		</div>

    @include ('admin.sections.tables.tab-deposito')

  </div>
</div>
    
@include ('admin.sections.scripts.js-deposito')

@endsection
