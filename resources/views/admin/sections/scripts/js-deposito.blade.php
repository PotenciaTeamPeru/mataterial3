<script type="text/javascript">
  $('#slempresa').on('change', function(e){
    console.log(e);
    var empresa_id = e.target.value;
    $.get('/json-titulares?empresa_id=' + empresa_id,function(data) {
      console.log(data);
      $('#sltitular').empty();
      $('#sltitular').append('<option value="0" disable="true" selected="true"> = Titular = </option>');

      $('#slcuenta').empty();
      $('#slcuenta').append('<option value="0" disable="true" selected="true"> = Cuenta = </option>');


      $.each(data, function(index, sltitularObj){
        $('#sltitular').append('<option value="'+ sltitularObj.id +'">'+ sltitularObj.nombres +'</option>');
      })
    });
  });

  $('#regencies').on('change', function(e){
    console.log(e);
    var proveedor = e.target.value;
    $.get('/json-cuentas?proveedor_id=' + proveedor_id,function(data) {
      console.log(data);
      $('#slcuenta').empty();
      $('#slcuenta').append('<option value="0" disable="true" selected="true"> = Cuenta = </option>');

      $.each(data, function(index, slcuentaObj){
        $('#slcuenta').append('<option value="'+ slcuentaObj.id +'">'+ slcuentaObj.numero_cuenta +'</option>');
      })
    });
  });


/*
 *  variables
 *  
 *  
 *  
 *  
 *  
 */

</script>
