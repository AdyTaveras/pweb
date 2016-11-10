@extends('admin.template.main')

@section('title')

Agregar Deuda

@endsection

@section('content')

<div class='text-center'>
  <img src="{{ asset('pictures/coin.png') }}">
</div>

<br>

{!! Form::open(['route' => 'debt.credits.store', 'method' => 'POST']) !!}

     <div id="contenedorFormulario" class="container">
            <div class="row row-flex row-flex-wrap">
                <div id="divAmount" class="form-group text-center col-md-6 col-xs-12">
                  <label class="control-label">Monto</label>
                  <input type="text" id="amount" name="amount" class='form-control' required>
                </div>
                <div id="divUsuario" class="form-group text-center col-md-6 col-xs-12">
                  <label class="control-label">Forma de pago</label>
                  {{ Form::select('choices',['' => 'Seleccione el metodo de pago', 'Daily' => 'Diario','Weekly' => 'Semanal','Monthly' => 'Mensual'],null,['class' => 'form-control']) }}
                </div>
                <div id="divFee" class="form-group text-center col-md-6 col-xs-12">
                  <label class="control-label">Cuotas</label>
                  <input type="text" id="fee" name="fee" class='form-control' required>
                </div>
                <div id="divInterest" class="form-group text-center col-md-6 col-xs-12">
                  <label class="control-label">Interes</label>
                  <input type="text" id="interest" name="interest" class='form-control' required>
                </div>
                <div id="divClient" class="form-group text-center col-md-6 col-xs-12">
                  <label class="control-label"">Cliente</label>
                  {{ Form::select('client_id',$client,null,['class' => 'form-control', 'required', 'placeholder' => 'Seleccione un cliente']) }}
                </div>                   
                <div id="divInterest" class="form-group text-center col-md-6 col-xs-12">
                  <label class="control-label">Total de interes a ganar</label>
                  <input type="text" id="interest_earn" name="interest_earn" class='form-control' readonly>
                </div>
                <div id="divIPayment" class="form-group text-center col-md-6 col-md-offset-3">
                  <label class="control-label">Pago del cliente por cuotas</label>
                  <input type="text" id="fee_payment" name="fee_payment" class='form-control' readonly>
                </div>
                <div class="form-group">
                <div class="row text-center col-md-6 col-md-offset-3">
                  <input type="submit" id="add_debt" class='btn btn-success' value='Agregar deuda'> <input type="button" id="interest_button" class='btn btn-primary' value='Calcular interes & Pago por cuota'>
                </div>
                <div>
                  <input type="text" id="current_amount" name='current_amount' class='hidden'>
                </div>
                <div>
                  <input type="text" id="current_fee" name='current_fee' class='hidden'>
                </div>
                </div>
            </div>
    </div>

{!! Form::close() !!}

@endsection