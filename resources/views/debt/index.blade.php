@extends('admin.template.main')

@section('title')

Historial de pagos

@endsection

@section('content')

<div class='text-center'>
  <img src="{{ asset('pictures/history.png') }}">
  <br>

  {!! Form::open(['route' => 'debt.credits.index','method' => 'GET','class' => 'navbar-form pull-right']) !!}
  <div class='input-group'>
     {{Form::text('ssn',null,['class' => 'form-control', 'aria-describeby' =>'search', 'placeholder' => 'Buscar por cedula'])}}
     <span class='input-group-addon' id ='search'><span class='glyphicon glyphicon-search' aria-hidden='true'></span></span>
  </div>
  {!! Form::close() !!}

  <table class='table responsive table table-stripped'>
	<thead>
      <th class='text-center'>Numero de pago</th>
      <th class='text-center'>Nombre & Apellido</th>
	  <th class='text-center'>Monto pagado</th>
	  <th class='text-center'>Fecha de pago</th>
	</thead>
	<tbody id='datos'>
	  <tr>
		@foreach($payment as $payments)
		<td class='text-center'>{{ $payments->id }}</td>
		<td class='text-center'>{{ $payments->name . " " . $payments->last_name }}</td>
		<td class='text-center'>{{ $payments->fee_payment }}</td>
		<td class='text-center'>{{ $payments->created_at }}</td>
		<td class='hidden'>{{ $payments->ssn }}</td>
	  </tr>	
	    @endforeach	
	</tbody>
  </table>
  {{ $payment->render() }}
</div>

@endsection