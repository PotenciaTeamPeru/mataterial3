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
