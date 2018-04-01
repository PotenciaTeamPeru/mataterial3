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
