@extends('layout.Principal')


@section('content')

<h1>Contacto</h1>

{!! Form::open(['url' => 'contacto/submit']) !!}
    <div class="form-group">
    	{{Form::label('name', 'Nombre completo')}}
		{{Form::text('name','', ['class' => 'form-control', 'placeholder' => 'Escribe tu nombre completo'])}}
    </div>

    <div class="form-group">
    	{{Form::label('email', 'Direccion E-Mail')}}
		{{Form::text('email','', ['class' => 'form-control', 'placeholder' => 'Escribe E-Mail'])}}
    </div>

    <div class="form-group">
    	{{Form::label('message', 'Mensaje')}}
		{{Form::textarea('message','', ['class' => 'form-control', 'placeholder' => 'Escribe mensaje'])}}
    </div>
	<div>
		{{Form::submit('Enviar', ['class' => 'btn btn-primary'])}}
	</div>

{!! Form::close() !!}
</br>
<div>
    <div>
        <h1>Ubicación</h1>
    </div>
    <div class="mapa" style="border:10px; border-color: black"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.480466811459!2d-101.01858084967748!3d22.145775785332418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842a98d246b51cb7%3A0xb1f403c454c50197!2sAv.+Dr.+Manuel+Nava+6%2C+Lomas+de+San+Luis%2C+78210+San+Luis%2C+S.L.P.!5e0!3m2!1ses-419!2smx!4v1519401045929" width="750" height="400" frameborder="0" style="border:10px" allowfullscreen></iframe></div>
</div>
@endsection