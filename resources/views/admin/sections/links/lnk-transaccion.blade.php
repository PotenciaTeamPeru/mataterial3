<div class="col-sm-3 col-md-3 col-lg-3">
	<div class="card">
		<div class="card-content">
			<ul class="nav nav-pills nav-pills-icons nav-stacked">

				<li {{ request()->is('depositos') ? 'class=active' : ''}} >
					<a href="{{ route ('depositos.index')}}">
						<i class="material-icons">local_atm</i>
						Depositos
					</a>
				</li>
				<li {{ request()->is('bancos') ? 'class=active' : ''}} >
					<a href="{{ route ('bancos.index')}}">
						<i class="material-icons">business</i>
						Bancos
					</a>
				</li>
				<li {{ request()->is('cuentas') ? 'class=active' : ''}} >
					<a href="{{ route ('cuentas.index')}}">
						<i class="material-icons">storage</i>
						Cuentas
					</a>
				</li>
				<li {{ request()->is('titulares') ? 'class=active' : ''}} >
					<a href="{{ route ('titulares.index')}}">
						<i class="material-icons">supervisor_account</i>
						Titulares
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
