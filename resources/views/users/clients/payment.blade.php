@extends('admin.template.main')

@section('title')

Realizar Pago 

@endsection

@section('content')

<div class='text-center'>
  <img src="{{ asset('pictures/get-money.png') }}">
</div>

<br>

{!! Form::open(['route' => 'users.clients.payment_store', 'method' => 'POST']) !!}

 <div id="contenedorPago" class="container">
    <div class="row row-flex row-flex-wrap">
        <div id="divMonto_corriente" class="form-group text-center col-md-6 col-xs-12">
        <input type="text" class='hidden' name="id" value={{$credits->id}}>
        <input type="text" class='hidden' name="id_client" value={{$client->id}}>
        <input type="text" class='hidden' name="name" value={{$client->name}}>
        <input type="text" class='hidden' name="last_name" value={{$client->last_name}}>
        <input type="text" class='hidden' name="ssn" value={{$client->ssn}}>
          <label class="control-label">Monto corriente</label>
          <input type="text" class='form-control' name="current_amount" id="current_amount" value={{$credits->current_amount}} readonly>
        </div>
        <div id="divCuota_corriente" class="form-group text-center col-md-6 col-xs-12">
          <label class="control-label" class='form-control'>Numero de cuota Corriente</label>
          <input type="text" class='form-control' name="current_fee" id="current_fee" value={{$credits->current_fee}} readonly>
        </div>
        <div id="divMonto_a_pagar" class="form-group text-center col-md-6 col-xs-12">
          <label class="control-label" class='form-control'>Monto a pagar</label>
          <input type="text" class='form-control' name="fee_payment" id="fee_payment" value={{$credits->fee_payment}} readonly>
        </div>
        <div id="divFuturo_monto" class="form-group text-center col-md-6 col-xs-12">
          <label class="control-label" class='form-control'>Monto a deber</label>
          <input type="text" name="future_amount" id="future_amount" class='form-control' readonly>
        </div>
        <div class="form-group text-center col-md-6 col-xs-12">
          <label class="control-label" class='form-control'>Numero de cuotas despues del pago</label>
          <input type="text" name="future_fee" id="future_fee" class='form-control' readonly>
        </div>
        <div class='text-center'>
        	{{ Form::submit('Realizar Pago',['class' => 'btn btn-primary']) }} <input type="button" class='btn btn-success' name="payment_calculo" id="payment_calculo" value="Realizar calculo">
        </div>
    </div>
 </div>
{!! Form::close()!!}

@endsection