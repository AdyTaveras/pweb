@extends('admin.template.main')

@section('title')

Clientes

@endsection

@section('content')

<div class = 'text-center'>
   <img src="{{ asset('pictures/team.png') }}">
   <h1>Clientes</h1>
</div>

<br>
<div class="table-responsive">
	<table class='table table-striped'>
	<thead>
		<th class='text-center'>ID</th>
		<th class='text-center'>Nombre</th>
		<th class='text-center'>Apellido</th>
		<th class='text-center'>Deuda</th>
		<th class='text-center'>Cedula</th>
		<th class='text-center'>Dirección</th>
		<th class='text-center'>Lugar de trabajo</th>
		<th class='text-center'>Email</th>
		<th class='text-center'>Teléfono</th>
		<th class='text-center'>Teléfono Adicional</th>
		<th class='text-center'>Opciones</th>
	</thead>
  	<tbody>
  	@foreach($clients as $client)  
  		<tr>
	  		<td class='text-center'>{{ $client->id }}</td>
	  	    <td class='text-center'>{{ $client->name }}</td>
	  	    <td class='text-center'>{{ $client->last_name }}</td>
	  	    <td class='text-center'>{{ $client->debt }}</td>
	  	    <td class='text-center'>{{ $client->ssn }}</td>
	  	    <td class='text-center'>{{ $client->address }}</td>
	  	    <td class='text-center'>{{ $client->work_location }}</td>
	  	    <td class='text-center'>{{ $client->email }}</td>
	  	    <td class='text-center'>{{ $client->phone }}</td>
	  	    <td class='text-center'>{{ $client->phone2 }}</td>
	  	    <td class='text-center'><a href="{{ route('users.clients.destroy', $client->id) }}" class='btn btn-danger'>Borrar</a>
	  	    <a href="{{ route('users.clients.edit', $client->id) }}" class='btn btn-warning'>Editar</a>
		    	  @if($client->debt  == 'Yes')
		    	  	@foreach($client->credits as $credit)
		    	  	<a  href="{{ route('users.clients.loan', $client->id . '/' .$credit->id) }}" class='btn btn-primary'>Ver prestamo</a>
		    	  	@endforeach
		    	  @endif
	  	    </td>
  		</tr>
 	@endforeach
  	</tbody>	
</table>
</div>
	

@endsection