@extends('admin.layout')

@section('content')

<div>
	<div class="container-fluid">

		<div class="title-block">

		</div>
		
		<div class="">

    @include ('admin.sections.links.lnk-transaccion')

    @include ('admin.sections.forms.form-envio-detalle')
	
		</div>

    @include ('admin.sections.tables.tab-envio-detalle')

	</div>
</div>

@endsection