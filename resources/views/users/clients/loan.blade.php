@extends('admin.template.main')

@section('title')

Prestamo de {{$user->name}}

@endsection

@section('scripts')

<link rel="stylesheet" type="text/css" href="{{ asset('css/loan.css') }}">  

@endsection

@section('content')

<center>
    <img class='img-responsive' src="{{ asset('pictures/coins.png') }}">
	 <h2>{{ $user->name }} {{ $user->last_name}}</h2>
</center>
<div class="table-responsive">
  <table class="table table-hover table-condensed">
    <thead>
      <tr class="bg-primary">
        <th>Monto original de la deuda</th>
        <th>Cuota original de la deuda</th>
        <th>Tasa de interés</th>
        <th>Monto corriente</th>
        <th>Cuota corriente</th>
        <th>Estado</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $credits->amount }}</td>
        <td>{{ $credits->fee }}</td>
        <td>{{ $credits->interest }}</td>
        <td>{{ $credits->current_amount }}</td>
        <td>{{ $credits->current_fee }}</td>
        <td>{{ $credits->status }}</td>
        <td><a href={{ route('users.clients.payment', $user->id ."/". $credits->id) }} class='btn btn-success'>Realizar pago</a></td>
      </tr>
    </tbody>
  </table>
</div>



@endsection