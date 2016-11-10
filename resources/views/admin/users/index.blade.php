@extends('admin.template.main')

@section('title')

Users

@endsection

@section('content')

	<h1 class = 'text-center'>Vista de usuarios</h1>
	<table class='table table-striped'>
	  <thead>
		<th class='text-center'>ID</th>
		<th class='text-center'>Nombre</th>
		<th class='text-center'>Opcion</th>
	  </thead>
	  <tbody>
	  @foreach($user as $users)
	    <tr>
	      <td class='text-center'>{{ $users->id }}</td>
	  	  <td class='text-center'>{{ $users->name }}</td>
	  	  <td class='text-center'><a href="{{ route('admin.users.destroy', $users->id) }}"onclick="return confirm('Estas seguro que deseas eliminar este usuario?')" class='btn btn-danger'>Borrar</a>
	  	  <a href="{{ route('admin.users.edit', $users->id) }}" class='btn btn-warning'>Editar</a>
	  	  </td>
	  	</tr>
	  @endforeach
	  </tbody>	

	</table>
	{{  $user->render()  }}

@endsection