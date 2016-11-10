$(document).on('ready',function(){

  $('#add_debt').hide();

  $('#interest_button').on('click',function(){
    if ($('#amount').val()!="" && $('#interest').val()!="" && $('#fee').val()!=""){
      $('#add_debt').show();
  	  var monto = $('#amount').val();
  	  var interes = $('#interest').val();
  	  var cuotas = $('#fee').val();
  	  var result = monto * interes;
  	  var result2 = monto / cuotas;
  	  $('#interest_earn').val(result);
  	  $('#fee_payment').val(result2);
    }else{
      sweetAlert("Oops...", "Porfavor complete todos los campos", "error");
    }	
  });

  // Introduce Amount into this hidden input

  // amount that copies on the field input current_amount && fee that copies on the field current_field
  $('#amount').on('keyup',function(){
  	$('#current_amount').val($(this).val());
  });

  $('#fee').on('keyup',function(){
  	$('#current_fee').val($(this).val());
  });

  $('#payment_calculo').on('click',function(){
    var monto_corriente = $('#current_amount').val();
    var cuota_corriente = $('#current_fee').val();
    var pago_mensual = $('#fee_payment').val();
    var resultado = monto_corriente - pago_mensual;
    var resultado2 = cuota_corriente - 1;
    $('#future_amount').val(resultado);
    $('#future_fee').val(resultado2);
  });
});