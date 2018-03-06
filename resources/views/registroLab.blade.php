@extends('layout.Principal')

@section('content')
<h1>Registro</h1>

{!! Form::open(['url' => '/responsable/create']) !!}
	{{ csrf_field() }}
    <div class="form-group">
    	{{Form::label('nombreLab', 'Nombre del Laboratorio')}}
		{{Form::text('nombreLab','', ['class' => 'form-control', 'placeholder' => 'Escribe nombre completo del laboratorio'])}}
    </div>

    <div class="form-group">
    	{{Form::label('tipo', 'Tipo')}}
		{{Form::text('tipo','', ['class' => 'form-control', 'placeholder' => 'Escribe Local o Foraneo'])}}
    </div>

    <div class="form-group">
    	{{Form::label('calle', 'Calle')}}
		{{Form::text('calle','', ['class' => 'form-control', 'placeholder' => 'Escribe calle'])}}
    </div>

    <div class="form-group">
    	{{Form::label('numero_ext', 'Numero exterior')}}
		{{Form::text('numero_ext','', ['class' => 'form-control', 'placeholder' => 'Escribe numero exterior'])}}
    </div>	

    <div class="form-group">
    	{{Form::label('numero_int', 'Numero interior')}}
		{{Form::text('nuero_int','', ['class' => 'form-control', 'placeholder' => 'Escribe numero interior'])}}
    </div>

    <div class="form-group">
    	{{Form::label('colonia', 'Colonia')}}
		{{Form::text('colonia','', ['class' => 'form-control', 'placeholder' => 'Escribe colonia'])}}
    </div>

    <div class="form-group">
    	{{Form::label('codigo_postal', 'Codigo postal')}}
		{{Form::text('codigo_postal','', ['class' => 'form-control', 'placeholder' => 'Escribe codigo postal'])}}
    </div>

    <div class="form-group">
    	{{Form::label('municipio', 'Municipio')}}
		{{Form::text('municipio','', ['class' => 'form-control', 'placeholder' => 'Escribe municipio'])}}
    </div>

    <div class="form-group">
    	{{Form::label('estado', 'Estado')}}
		{{Form::text('estado','', ['class' => 'form-control', 'placeholder' => 'Escribe estado'])}}
    </div>

    <div class="form-group">
    	{{Form::label('municipio_estado', 'Municipio Estado')}}
		{{Form::text('municipio_estado','', ['class' => 'form-control', 'placeholder' => 'Escribe municipio estado'])}}
    </div>

    <div class="form-group">
    	{{Form::label('telefono', 'Telefono')}}
		{{Form::text('telefono','', ['class' => 'form-control', 'placeholder' => 'Escribe tu telefono de casa'])}}
    </div>

    <div class="form-group">
    	{{Form::label('email', 'Direccion E-Mail')}}
		{{Form::text('email','', ['class' => 'form-control', 'placeholder' => 'Escribe E-Mail'])}}
    </div>

	<div>
		{{Form::submit('Registrar', ['class' => 'btn btn-primary'])}}
	</div>

{!! Form::close() !!}

@endsection