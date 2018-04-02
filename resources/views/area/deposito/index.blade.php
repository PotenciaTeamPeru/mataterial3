@extends('admin.layout')

@section('content')

<div>
	<div class="container-fluid">

		<div class="title-block">

		</div>
		
		<div class="">

    @include ('admin.sections.links.lnk-transaccion')

    @include ('admin.sections.forms.form-deposito')
  	
	
		</div>

    @include ('admin.sections.tables.tab-deposito')

  </div>
</div>
  
  	@push ('js-depo')

  	{!! Html::script('/admin/js/list-depo.js') !!}
  	
  	@endpush
  	
@endsection
