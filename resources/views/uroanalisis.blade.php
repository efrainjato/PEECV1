@extends('layout.Principal')

@section('content')
<div class="text-center container"> 
<h2>Registro de Resultados del Área de Uroánalisis Bimestral Enero-Febrero 2018</h2>
</div>

<div> 
<h3>Conteste y Seleccione</h3>
</div>

<div class="row">
    <div class="form-group">
    	{{Form::label('Marca', 'A-Marca Comercial de la tira reactiva empleada')}}
		{{Form::text('Marca','', ['class' => 'form-control', 'placeholder' => 'Escribe A-Marca Comercial de la tira reactiva empleada'])}}
    </div>	
</div>


<div class="row">
    <div class="col-4">
      <p>El análisis se realizo de la forma</p>
    </div>
</div>

<div class="">
  <div class="form-check">
     <input class="form-check-input" type="checkbox" value="">Visual</input>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="">Automatizado</input>
  </div>
</div>
 <br>
<div class="container table-responsive">
   <table class="table table-bordered">
  <tbody>
    <tr style="background-color: white">
      <th scope="row" style="background-color: black; color:white">pH</th>
      <td>0</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
    </tr>
    <tr style="background-color: white">
      <th scope="row" style="background-color: black; color:white">PROTEÍNA</th>
      <td>0</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
    </tr>
    <tr style="background-color: white">
      <th scope="row" style="background-color: black; color:white">GLUCOSA</th>
      <td>0</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
    </tr>
    <tr style="background-color: white">
      <th scope="row" style="background-color: black; color:white">CUERPOS CETONICOS</th>
       <td>0</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
    </tr>
    <tr style="background-color: white">
      <th scope="row" style="background-color: black; color:white">BILIBURRUBINA</th>
      <td>0</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
    </tr>
    <tr style="background-color: white">
      <th scope="row" style="background-color: black; color:white">SANGRE</th>
      <td>0</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
    </tr>
    <tr style="background-color: white">
      <th scope="row" style="background-color: black; color:white">NITRITOS</th>
      <td>0</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
    </tr>
    <tr style="background-color: white">
      <th scope="row" style="background-color: black; color:white">UROBILINÓGENO</th>
      <td>0</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
    </tr>
    <tr style="background-color: white">
      <th scope="row" style="background-color: black; color:white">LEUCOCITOS</th>
      <td>0</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
    </tr>
    <tr style="background-color: white">
      <th scope="row" style="background-color: black; color:white">GRAVEDAD ESPECÍFICA</th>
      <td>0</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
    </tr>
  </tbody>
</table>
</div>
@endsection