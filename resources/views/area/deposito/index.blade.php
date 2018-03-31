@extends('admin.global')

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
    
<script type="text/javascript">
  $.('#empresas').on('change', function(e) {
    console.log(e);
    var empresa_id = e.target.value;
    $.get('/json-proveedores?empresa_id=' + empresa_id,function(data) {
      console.log(data);
      $('#proveedores').empty();
      $('#proveedores').append('<option value="0" disable="true" selected="true"> = Titular = </option>');

      $('#cuentas').empty();
      $('#cuentas').append('<option value="0" disable="true" selected="true"> = Cuenta = </option>');


      $.each(data, function(index, proveedoresObj){
        $('#proveedores').append('<option value="'+ proveedoresObj.id +'">'+ proveedoresObj.nombres +'</option>');
      })
    });
  });

  $('#proveedores').on('change', function(e){
    console.log(e);
    var proveedores_id = e.target.value;
    $.get('/json-cuentas?proveedores_id=' + proveedores_id,function(data) {
      console.log(data);
      $('#cuentas').empty();
      $('#cuentas').append('<option value="0" disable="true" selected="true"> = Cuenta = </option>');

      $.each(data, function(index, slcuentaObj){
        $('#cuentas').append('<option value="'+ cuentasObj.id +'">'+ cuentasObj.numero_cuenta +'</option>');
      })
    });
  });


/*
 *  variables
 *  listempresas => variable desde el controlador hacia la vista
 *  
 *  vista_empresa => nombre del select empresa
 *  vista_titular => nombre del select cuenta
 *  
 *  json-titulares => vinculos desde el route web
 *  json-cuentas   => 
 *  
 *  
 */

</script>
@endsection



@push('democss')
{!! Html::style('/admin/css/demo.css') !!}
@endpush

@push('materialcss')
{!! Html::style('/admin/css/material-dashboard.css?v=1.2.0') !!}
@endpush

@push('bootstrap337css')
{!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css') !!}
@endpush

@push('awesomecss')
{!! Html::style('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') !!}
@endpush

@push('font')
{!! Html::style('http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons') !!}
@endpush

@push('datatablescss')
{!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/jquery.dataTables.min.css') !!}
@endpush



@push('jquery111js')
{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}
@endpush


@push('bootstrap337js')
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js') !!}
@endpush

@push('materialjs')
{!! Html::script('/admin/js/material.min.js') !!}
@endpush

@push('chartlistjs')
{!! Html::script('/admin/js/chartist.min.js') !!}
@endpush

@push('arrive')
{!! Html::script('/admin/js/arrive.min.js') !!}
@endpush

@push('scrollbarjs')
{!! Html::script('/admin/js/perfect-scrollbar.jquery.min.js') !!}
@endpush

@push('notifyjs')
{!! Html::script('/admin/js/bootstrap-notify.js') !!}
@endpush

@push('dashboardjs')
{!! Html::script('/admin/js/material-dashboard.js?v=1.2.0') !!}
@endpush

@push('demojs')
{!! Html::script('/admin/js/demo.js') !!}
@endpush

@push('datatablesjs')
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/jquery.dataTables.min.js') !!}
@endpush




