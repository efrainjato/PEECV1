@extends('layout.Principal')

@section('content')
<h1>Ingresar</h1>

<br>
<br>

    <div class="form-group">
    	{{Form::label('usuario', 'Usuario')}}
		{{Form::text('usuario','', ['class' => 'form-control', 'placeholder' => 'Escribe tu cuenta de usuario'])}}
    </div>	

    <div class="form-group">
    	{{Form::label('password', 'Password')}}
		{{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Escribe password personal'])}}
    </div>


@endsection