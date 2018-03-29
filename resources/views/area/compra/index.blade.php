@extends('admin.layout')

@section('content')

<div>
    <div class="container-fluid">

        @include ('admin.sections.forms.form-compra')
            @yield('formulario')  


        @include ('admin.sections.tables.tab-compra')
            @yield('tabla')  

    </div>
</div>

@endsection