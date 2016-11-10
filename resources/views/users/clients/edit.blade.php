@extends('admin.template.main')

@section('title')

Editar Cliente {{$user->name}}

@endsection

@if(count($errors) > 0)
   <div class = 'alert alert-danger'>
     <ul>
	   @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
	   @endforeach
	 </ul>
    </div>

@endif

@section('content')

 {!! Form::open(['route' => ['users.clients.update',$user->id], 'method' => 'PUT']) !!}

	 <div class='text-center'>

	 	{{  Form::label('name','Nombre')  }}
	    {{  Form::text('name',$user->name, ['class' => 'form-control','required']) }}
 
        <br>

        {{  Form::label('last_name','Apellido')  }}
	    {{  Form::text('last_name',$user->last_name, ['class' => 'form-control','required']) }}
        
        <br>

        {{  Form::label('ssn','Cedula')  }}
	    {{  Form::text('ssn',$user->ssn, ['class' => 'form-control','required']) }}

        <br>

	    {{  Form::label('address','Dirección')  }}
	    {{  Form::text('address',$user->address, ['class' => 'form-control','required']) }}

	    <br>

	    {{  Form::label('work_location','Lugar de trabajo')  }}
	    {{  Form::text('work_location',$user->work_location, ['class' => 'form-control']) }}

	    <br>

	    {{  Form::label('email','Email')  }}
	    {{  Form::email('email',$user->email, ['class' => 'form-control','required']) }}


	    <br>

	    {{  Form::label('phone','Teléfono')  }}
	    {{  Form::text('phone',$user->phone, ['class' => 'form-control','required']) }}

	    <br>

	    {{  Form::label('phone2','Teléfono Adicional')  }}
	    {{  Form::text('phone2',$user->phone2, ['class' => 'form-control']) }}

	    <br>

	    <br>
	    {{  Form::submit('Editar cliente',['class' => 'btn btn-success']) }}

	 </div>

 {!! Form::close() !!}

@endsection