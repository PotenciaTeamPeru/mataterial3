<div class=" col-sm-12 col-md-12 col-lg-12 ">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Depositos</h4>
            <p class="category">Informacion Basica...</p>
        </div>
        <div class="card-content table-responsive">
            <table class="table table-hover">
                <thead class="text-warning">

                    <th> Banco </th>
                    <th> Titular </th>
                    <th> Monto </th>
                    <th> Fecha </th>
                    <!--<th class=" col-sm-3 col-md-3 col-lg-3 "> Acciones </th>-->
                
                </thead>
                <tbody>

                    @foreach ($depositos as $deposito)
                    <tr class="odd gradeA">
                        <td>{{ $deposito->vBanco->acronimo }}</td>
                        <td>{{ $deposito->vProveedor->nombres." ".$deposito->vProveedor->apellido_paterno." ".$deposito->vProveedor->apellido_materno }}</td>
                        <td>{{ $deposito->monto }}</td>
                        <td>{{ $deposito->fecha_deposito }}</td>

                            <!-- Botones de edicion -->
                        <!--
                        <td>
                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#mDepositoMostrar" value="{{ $deposito->id }}">
                            <i class="material-icons">crop_5_4</i> 
                            </button>

                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#mDepositoEditar" value="{{ $deposito->id }}">
                            <i class="material-icons">border_color</i> 
                            </button>

                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#mDepositoBorrar" value="{{ $deposito->id }}">
                            <i class="material-icons">close</i> 
                            </button>               

                        </td>
                        -->

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
