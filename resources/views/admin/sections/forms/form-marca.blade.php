<div class="col-sm-9 col-md-9 col-lg-9">
	<div class="card">
		<div class="card-header" data-background-color="purple">
			<h4 class="title">Nueva Marca</h4>
			<p class="category">ingresa....</p>
		</div>
		<div class="card-content">

			<form method="POST" action="{{route('marcas.store')}}">
				{!! csrf_field() !!}

				<div class="row">
					<div class="col-md-6">
						<div class="form-group label-floating">
							<select name="banco_id" class="form-control">
								<option value=""> Empresa </option>

							@foreach($empresas as $empresa)
								<option value="{{ $empresa->id }}">
									{{ $empresa->nombre }} 
								</option>
							@endforeach

							</select>

						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group label-floating">
							<label class="control-label">Marca</label>
							<input name="nombre" type="text" class="form-control">
						</div>
					</div>
				</div>
				
				<button type="submit" class="btn btn-primary pull-right">Guardar</button>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</div>
