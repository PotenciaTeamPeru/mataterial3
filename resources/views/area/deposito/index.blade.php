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
    
@include ('admin.sections.scripts.js-deposito')

<script>
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

@endsection


<!-- ----- STYLE ----- -->

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

<!-- ----- STYLE ----- -->

<!-- ------ JS ------ -->

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

@push('materialscriptjs')
{!! Html::script('/admin/js/material-script.js') !!}
@endpush

@push('datatablesjs')
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/jquery.dataTables.min.js') !!}
@endpush

<!-- ------ JS ------ -->



