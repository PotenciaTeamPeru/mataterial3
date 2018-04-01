<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indonesia</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="col-lg-4">
        <h2>Laravel 5.5 JQuery Ajax Example</h2>
        {{ Form::open() }}
          <div class="form-group">
            <label for="">Your Provinces</label>
            <select class="form-control" name="empresa" id="empresa">
              <option value="0" disable="true" selected="true">=== Empresas ===</option>
                @foreach ($mtempresas as $key => $value)
                  <option value="{{$value->id}}">{{ $value->nombre }}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="">Your Regencies</label>
            <select class="form-control" name="proveedor" id="proveedor">
              <option value="0" disable="true" selected="true">=== Titulares ===</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Your Districts</label>
            <select class="form-control" name="cuenta_id" id="cuenta_id">
              <option value="0" disable="true" selected="true">=== Cuentas ===</option>
            </select>
          </div>

        {{ Form::close() }}
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">


      $('#empresa').on('change', function(e){
        console.log(e);
        var vempresas_id = e.target.value;
        $.get('/json-proveedores?vempresas_id=' + vempresas_id,function(data) {
          console.log(data);

          $('#proveedor').empty();
          $('#proveedor').append('<option value="0" disable="true" selected="true"> Titulares </option>');

          $('#cuenta_id').empty();
          $('#cuenta_id').append('<option value="0" disable="true" selected="true"> Cuentas </option>');

          $.each(data, function(index, jproveedoresObj){
            $('#proveedor').append('<option value="'+ jproveedoresObj.id +'">'+ jproveedoresObj.nombres +' '+ jproveedoresObj.apellido_paterno +'</option>');
          })
        });
      });


      $('#proveedor').on('change', function(e){
        console.log(e);
        var vcuentas = e.target.value;
        $.get('/json-cuentas?vcuentas=' + vcuentas,function(data) {
          console.log(data);
          $('#cuenta_id').empty();
          $('#cuenta_id').append('<option value="0" disable="true" selected="true"> Cuenta </option>');

          $.each(data, function(index, jcuentasObj){
            $('#cuenta_id').append('<option value="'+ jcuentasObj.id +'">'+ jcuentasObj.numero_cuenta +'</option>');
          })
        });
      });


    </script>

  </body>
</html>