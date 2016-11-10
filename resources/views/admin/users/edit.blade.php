@extends('admin.template.main')

@section('title')

Editar usuario {{$user->name}}

@endsection

@section('content')

 {!! Form::open(array('route' => ['admin.users.update',$user->id], 'method' => 'put')) !!}﻿

	 <div class='text-center'>

	 	{{  Form::label('name','Nombre')  }}
	    {{  Form::text('name',$user->name,['class' => 'form-control','required']) }}

        <br>

	    {{  Form::label('email','Correo Electronico')  }}
	    {{  Form::email('email',$user->email,['class' => 'form-control','required']) }}

	    <br>

	    {{  Form::label('password','Password')  }}
	    {{  Form::password('password',	['class' => 'form-control','required']) }}

	    <br>

	    <br>
	    {{  Form::submit('Editar usuario',['class' => 'btn btn-warning']) }}

	 </div>

 {!! Form::close() !!}

@endsection