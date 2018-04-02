@extends('admin.layout')

@section('content')

<div>
	<div class="container-fluid">

		<div class="title-block">

		</div>
		
		<div class="">

    @include ('admin.sections.links.lnk-proveedor')

    @include ('admin.sections.forms.form-proveedor')
	
		</div>

    @include ('admin.sections.tables.tab-proveedor')

	</div>
</div>

@endsection