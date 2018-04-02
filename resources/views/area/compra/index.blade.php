@extends('admin.layout')

@section('content')

<div>
	<div class="container-fluid">

		<div class="title-block">

		</div>
		
		<div class="">

        @include ('admin.sections.forms.form-compra')
            @yield('formulario')  


        @include ('admin.sections.tables.tab-compra')
            @yield('tabla')  

    </div>
</div>

@endsection