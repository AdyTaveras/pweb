@extends('admin.template.main')

@section('title')

Crear cliente

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

<div class='text-center'>
  <img src="{{ asset('pictures/boy.png') }}">
</div>

<br>

{!! Form::open(['route' => 'users.clients.store', 'method' => 'POST']) !!}

     <div id="contenedorFormulario" class="container">
            <div class="row row-flex row-flex-wrap">
                <input type="hidden" id="usuario2">
                <div id="divNombre" class="form-group text-center col-md-6 col-xs-12">
                    <label class="control-label" for="nombre">Nombre</label>
                    {{  Form::text('name',null, ['class' => 'form-control','required']) }}
                </div>
                <div id="divUsuario" class="form-group text-center col-md-6 col-xs-12">
                    <label class="control-label" for="usuario">Apellido</label>
                    {{  Form::text('last_name',null, ['class' => 'form-control','required']) }}
                </div>
                <div id="divCorreo" class="form-group text-center col-md-6 col-xs-12">
                    <label class="control-label" for="correo">Cedula</label>
                    {{  Form::text('ssn',null, ['class' => 'form-control','required']) }}
                </div>
                <div id="divClave" class="form-group text-center col-md-6 col-xs-12">
                    <label class="control-label" for="clave">Dirección</label>
                    {{  Form::text('address',null, ['class' => 'form-control','required']) }}
                </div>
                <div id="divClave2" class="form-group text-center col-md-6 col-xs-12">
                    <label class="control-label" for="clave2">Lugar de trabajo</label>
                    {{  Form::text('work_location',null, ['class' => 'form-control']) }}
                </div>                   
                <div id="divRol" class="form-group text-center col-md-6 col-xs-12">
                    <label class="control-label" for="rol">Email</label>
                    {{  Form::email('email',null,['class' => 'form-control']) }}
                </div>

                <div class="form-group text-center col-md-6 col-xs-12">
                    <label class="control-label" for="imagen">Teléfono</label>
                    {{  Form::text('phone',null, ['class' => 'form-control','required']) }}                                          
                </div>  
                <div id="divContacto" class="form-group text-center col-md-6 col-xs-12">
                    <label class="control-label" for="contacto">Teléfono Adicional</label>
                    {{  Form::text('phone2',null, ['class' => 'form-control']) }}
                </div>  
            <div class="form-group">
                <div class="row text-center">
                    {{  Form::submit('Create client',['class' => 'btn btn-success']) }}
                </div>
            </div>
    </div>
{!! Form::close() !!}

@endsection