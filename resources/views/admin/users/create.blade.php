@extends('admin.template.main')

@section('title')

Crear usuario

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
 {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}


	 <div class='text-center'>

	 	{{  Form::label('name','Nombre')  }}
	    {{  Form::text('name',null,['class' => 'form-control','required']) }}

        <br>

	    {{  Form::label('email','Email')  }}
	    {{  Form::email('email',null,['class' => 'form-control','required']) }}

	    <br>

	    {{  Form::label('password','Clave')  }}
	    {{  Form::password('password',	['class' => 'form-control','required']) }}

	    <br>

	    <br>
	    {{  Form::submit('Create user',['class' => 'btn btn-success']) }}

	 </div>
 
 {!! Form::close() !!}


@endsection