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

    @include ('admin.sections.forms.form-venta')
	
		</div>

    @include ('admin.sections.tables.tab-venta')

	</div>
</div>

@endsection