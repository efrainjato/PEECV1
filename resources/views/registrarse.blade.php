@extends('layout.Principal')

@section('content')

<h1>Registro</h1>

{!! Form::open(['url' => '/responsable/create']) !!}
	{{ csrf_field() }}
    <div class="form-group">
    	{{Form::label('nombre', 'Nombre completo')}}
		{{Form::text('nombre','', ['class' => 'form-control', 'placeholder' => 'Escribe tu nombre completo'])}}
    </div>

    <div class="form-group">
    	{{Form::label('profesion', 'Profesion')}}
		{{Form::text('profesion','', ['class' => 'form-control', 'placeholder' => 'Escribe tu profesion'])}}
    </div>

    <div class="form-group">
    	{{Form::label('telefono', 'Telefono')}}
		{{Form::text('telefono','', ['class' => 'form-control', 'placeholder' => 'Escribe tu telefono de casa'])}}
    </div>

    <div class="form-group">
    	{{Form::label('direccion', 'Direccion personal')}}
		{{Form::text('direccion','', ['class' => 'form-control', 'placeholder' => 'Escribe tu direccion personal'])}}
    </div>	

    <div class="form-group">
    	{{Form::label('email', 'Direccion E-Mail')}}
		{{Form::text('email','', ['class' => 'form-control', 'placeholder' => 'Escribe E-Mail'])}}
    </div>

    <div class="form-group">
    	{{Form::label('fecha_nac', 'Fecha de nacimiento')}}
		{{Form::date('fecha_nac', \Carbon\Carbon::now())}}
    </div>

    <div class="form-group">
    	{{Form::label('curp', 'CURP')}}
		{{Form::text('curp','', ['class' => 'form-control', 'placeholder' => 'Escribe tu CURP'])}}
    </div>

    <div class="form-group">
    	{{Form::label('password', 'Password')}}
		{{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Escribe password personal'])}}
    </div>

    <div class="form-group">
    	{{Form::label('confPassword', 'Confirma password')}}
		{{Form::password('confPassword', ['class' => 'form-control', 'placeholder' => 'Confirma password personal'])}}
    </div>

	<div>
		{{Form::submit('Registrar', ['class' => 'btn btn-primary'])}}
	</div>

{!! Form::close() !!}

@endsection