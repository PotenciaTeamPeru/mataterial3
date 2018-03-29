<div class="col-sm-9 col-md-9 col-lg-9">
	<div class="card">
		<div class="card-header" data-background-color="purple">
			<h4 class="title">Nuevo Deposito</h4>
			<p class="category">ingresa....</p>
		</div>
		<div class="card-content">

			<form method="POST" action="{{route('depositos.store')}}">
				{!! csrf_field() !!}

				<div class="row">
					<div class="col-md-6">
						<div class="form-group label-floating">
							<select id="slempresa" name="slempresa" class="form-control">
								<option value="0" disable="true" selected="true" >
									 Empresa
								</option>
	
                  @foreach($listempresas as $key => $value)

                      <option value="{{ $value->id }}">
                          {{ $value->nombre }} 
                      </option>
                  
                  @endforeach

							</select>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group label-floating">
							<select id="sltitular" name="sltitular" class="form-control">
								<option  value="0" disable="true" selected="true" >
									 Titular 
								</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group label-floating">
							<select id="slcuenta" name="slcuenta" class="form-control">
								<option  value="0" disable="true" selected="true" >
									 Cuenta 
								</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group label-floating">
							<label class="control-label"> &nbsp; &nbsp; Monto</label>
							<input id="monto" name="monto" type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group label-floating">
							<input id="fecha_deposito" name="fecha_deposito" type="date" class="form-control">
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary pull-right">Guardar</button>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</div>
