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

<div class="container">
    <div class="row" >
    <div class="col-md-4 table-responsive">
        <table class="table table-bordered table-responsive"  >
            <tbody>
                <tr style="font-size:8pt; background-color: white">
                <th scope="row" style="background-color: black; color:white">pH</th>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                </tr>
                <tr style="font-size:8pt; background-color: white">
                <th scope="row" style="background-color: black; color:white">PROTEÍNA</th>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                </tr>
                <tr style="font-size:8pt; background-color: white">
                <th scope="row" style="background-color: black; color:white">GLUCOSA</th>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                </tr>
                <tr style="font-size:8pt; background-color: white">
                <th scope="row" style="background-color: black; color:white">CUERPOS CETONICOS</th>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                </tr>
                <tr style="font-size:8pt; background-color: white">
                <th scope="row" style="background-color: black; color:white">BILIBURRUBINA</th>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                </tr>
                <tr style="font-size:8pt; background-color: white">
                <th scope="row" style="background-color: black; color:white">SANGRE</th>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                </tr>
                <tr style="font-size:8pt; background-color: white">
                <th scope="row" style="background-color: black; color:white">NITRITOS</th>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                </tr>
                <tr style="font-size:8pt; background-color: white">
                <th scope="row" style="background-color: black; color:white">UROBILINÓGENO</th>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                </tr>
                <tr style="font-size:8pt; background-color: white">
                <th scope="row" style="background-color: black; color:white">LEUCOCITOS</th>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                </tr>
                <tr style="font-size:8pt; background-color: white">
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
    <div class="col-md-8 table-responsive">
    <table class=" table-bordered table-responsive ">
  
   <tr style="font-size:8pt; background-color:white" >
     <th scope="row" style="width:15%; background-color:black; color: white">pH</th>
     <td style="width:5%">0</td>
     <td style="width:10%">5</td>
     <td style="width:5%">1</td>
     <td style="width:10%">6 a 6.5</td>
     <td style="width:5%">2</td>
     <td style="width:10%">7 a 7.5</td>
     <td style="width:5%">3</td>
     <td style="width:10%">8 a 8.5</td>
     <td style="width:5%">4</td>
     <td style="width:10%">9 o mas</td>
  </tr>
  
  <tr style="font-size:8pt; background-color:white">
    <th scope="row" rowspan="2" style=" background-color:black; color: white">Proteína</th>
    <td style="width:5%" rowspan="2">0</td>
    <td style="width:10%" rowspan="2">Negativo</td>
    <td style="width:5%" rowspan="2">1</td>
    <td style="width:10%" rowspan="2">Trazas</td>
    <td style="width:5%" rowspan="2">2</td>
    <td style="width:10%">30 a 74</td>
    <td style="width:5%" rowspan="2">3</td>
    <td style="width:10%">75 a 100</td>
    <td style="width:5%" rowspan="2">4</td>
    <td style="width:10%">300 a 500</td>
    <td style="width:5%" rowspan="2" >5</td>
    <td style="width:15%">1000 a 2000</td>
  </tr>
  
  <tr style="font-size:8pt; background-color:white">
    <td style="width:10%">+</td>
    <td style="width:10%">++</td>
    <td style="width:10%">+++</td>
    <td style="width:10%">+++</td>
  </tr>
  
  <tr style="font-size:8pt; background-color:white">
    <th scope="row" rowspan="2" style=" background-color:black; color: white">Glucosa</th>
    <td style="width:5%" rowspan="2">0</td>
    <td style="width:10%" >Negativo</td>
    <td style="width:5%" rowspan="2">1</td>
    <td style="width:10%" >50 a 300</td>
    <td style="width:5%" rowspan="2">2</td>
    <td style="width:10%">>300 a 500</td>
    <td style="width:5%" rowspan="2">3</td>
    <td style="width:10%">500 a 1000</td>
    <td style="width:5%" rowspan="2">4</td>
    <td style="width:10%">1000 a 2000</td>
  </tr>
 
  <tr style="font-size:8pt; background-color:white">
     <td>Normal</td>
     <td>+</td>
     <td>++</td>
     <td>+++</td>
     <td>++++</td>
  </tr>
  
   <tr style="font-size:8pt; background-color:white">
    <th scope="row" rowspan="3" style=" background-color:black; color: white">Cuerpos Cetonicos</th>
    <td style="width:5%" rowspan="3">0</td>
    <td style="width:10%"rowspan="3" >Negativo</td>
    <td style="width:5%" rowspan="3">1</td>
    <td style="width:10%" >5</td>
    <td style="width:5%" rowspan="3">2</td>
    <td style="width:10%">10 a 15</td>
    <td style="width:5%" rowspan="3">3</td>
    <td style="width:10%">40 a 50 </td>
    <td style="width:5%" rowspan="3">4</td>
    <td style="width:10%">80 a 160</td>
  </tr>
  
  <tr style="font-size:8pt; background-color:white">
     <td>Bajo/Trazas</td>
     <td>escaso</td>
     <td>moderado</td>
     <td>abundante</td>
  </tr>
  
  <tr style="font-size:8pt; background-color:white">
     <td>+</td>
     <td>++</td>
     <td>+++</td>
     <td>++++</td>
  </tr>
  
  <tr style="font-size:8pt; background-color:white">
    <th scope="row" rowspan="3" style=" background-color:black; color: white">BILIRRUBINA (mg/dL)</th>
    <td style="width:5%" rowspan="3">0</td>
    <td style="width:10%"rowspan="3" >Negativo</td>
    <td style="width:5%" rowspan="3">1</td>
    <td style="width:10%" >0.5</td>
    <td style="width:5%" rowspan="3">2</td>
    <td style="width:10%">1</td>
    <td style="width:5%" rowspan="3">3</td>
    <td style="width:10%">3.2 a 4 </td>
    <td style="width:5%" rowspan="3">4</td>
    <td style="width:10%">>4</td>
  </tr>
  <tr style="font-size:8pt; background-color:white">
     <td>escaso</td>
     <td>moderado</td>
     <td>abundante</td>
     <td></td>
  </tr>
  
  <tr style="font-size:8pt; background-color:white">
    <td>+</td>
    <td>++</td>
    <td>+++</td>
    <td>++++</td>
  </tr>
  
  <tr style="font-size:8pt; background-color:white">
    <th scope="row" rowspan="2" style=" background-color:black; color: white">SANGRE (células /µL)</th>
    <td style="width:5%" rowspan="2">0</td>
    <td style="width:10%"rowspan="2" >Negativo</td>
    <td style="width:5%" rowspan="2">1</td>
    <td style="width:10%" >10 o indicios</td>
    <td style="width:5%" rowspan="2">2</td>
    <td style="width:10%">25</td>
    <td style="width:5%" rowspan="2">3</td>
    <td style="width:10%">50 a 80 </td>
    <td style="width:5%" rowspan="2">4</td>
    <td style="width:10%">>80</td>
  </tr>
  
  <tr style="font-size:8pt; background-color:white">
    <td>+</td>
    <td>++</td>
    <td>+++</td>
    <td>++++</td>
  </tr>
  
<tr style="font-size:8pt; background-color:white">
    <th scope="row" rowspan="" style=" background-color:black; color: white">NITRITOS</th>
    <td style="width:5%" rowspan="">0</td>
    <td style="width:10%"rowspan="" >Negativo</td>
    <td style="width:5%" rowspan="">1</td>
    <td style="width:10%" >Positivo</td>
    <td style="width:5%" rowspan="">2</td>
    <td style="width:10%"></td>
    <td style="width:5%" rowspan="">3</td>
    <td style="width:10%"> </td>
    <td style="width:5%" rowspan="">4</td>
    <td style="width:10%"></td>
</tr>

<tr style="font-size:8pt; background-color:white">
    <th scope="row" rowspan="2" style=" background-color:black; color: white">UROBILINÓGENO (mg/dL)</th>
    <td style="width:5%" rowspan="2">0</td>
    <td style="width:10%"rowspan="2" >Norma(0.2)</td>
    <td style="width:5%" rowspan="2">1</td>
    <td style="width:10%" >1</td>
    <td style="width:5%" rowspan="2">2</td>
    <td style="width:10%">4</td>
    <td style="width:5%" rowspan="2">3</td>
    <td style="width:10%">8 </td>
    <td style="width:5%" rowspan="2">4</td>
    <td style="width:10%">12</td>
</tr>
<tr style="font-size:8pt; background-color:white">
    <td>+</td>
    <td>++</td>
    <td>+++</td>
    <td>++++</td>
</tr>


<tr style="font-size:8pt; background-color:white">
   <th scope="row" rowspan="3" style=" background-color:black; color: white">LEUCOCITOS (leu/µL) </th>
    <td style="width:5%" rowspan="3">0</td>
    <td style="width:10%"rowspan="3" >Negativo</td>
    <td style="width:5%" rowspan="3">1</td>
    <td style="width:10%" >10 a 25</td>
    <td style="width:5%" rowspan="3">2</td>
    <td style="width:10%">>25 a 75</td>
    <td style="width:5%" rowspan="3">3</td>
    <td style="width:10%">>75 a 125 </td>
    <td style="width:5%" rowspan="3">4</td>
    <td style="width:10%">>125 a 500</td>
  </tr>
  <tr style="font-size:8pt; background-color:white">
     <td>trazas</td>
     <td>escaso</td>
     <td>moderado</td>
     <td>abundante</td>
  </tr>
  
  <tr style="font-size:8pt; background-color:white">
    <td>+</td>
    <td>++</td>
    <td>+++</td>
    <td>++++</td>
  </tr>
  
  <tr style="font-size:8pt; background-color:white">
    <th scope="row" rowspan="2" style=" background-color:black; color: white">GRAVEDAD ESPECÍFICA</th>
    <td style="width:5%" rowspan="2">0</td>
    <td style="width:10%"rowspan="2" >1.000</td>
    <td style="width:5%" rowspan="2">1</td>
    <td style="width:10%" >1.005</td>
    <td style="width:5%" rowspan="2">2</td>
    <td style="width:10%">1.010</td>
    <td style="width:5%" rowspan="2">3</td>
    <td style="width:10%">1.015</td>
    <td style="width:5%" rowspan="2">4</td>
    <td style="width:10%">1.020</td>
    <td style="width:5%" rowspan="2">5</td>
    <td style="width:15%">1.025</td>
    <td style="width:5%" rowspan="2">6</td>
    <td style="width:10%">1.030</td>
  </tr>
</table>
</div>    
</div>

</br>
<div class="row" style="background-color: white">
  <div class="col-6">
        <p>NOTA: Favor de enviar sus resultados con atención al M.C. Juan Manuel Vargas Morales antes del día 30 de enero del 2018 al correo peec.fcq@gmail.com.Enviar resultados escaneados</p>
   </div>

   <div class="col-12">
      
    <ol>
      <li>Coloque 12 ml de agua destilada o desionizada en un tubo para muestra debidamente etiquetado. No utilice agua de grifo</li>
      <li>Extraiga la tira de control del tubo Nara Biotec</li>
      <li>Agite por inversión suavemente el tubo hacia delante y hacia atrás durante 2 minutos</li>
      <li>Deje que el tubo se estabilice durante 30 minutos a temperatura ambiente.</li>
      <li>Agite con inversion una vez más; luego extraiga y deseche la tira de acuerdo a sus procedimientos de laboratorio habituales</li>
    </ol>
   
   </div>

</div>

<div class="row" style="background-color: white">
   <div class="col-12">
    <ol>
      <li>Coloque 12 ml de agua destilada o desionizada en un tubo para muestra debidamente etiquetado. No utilice agua de grifo</li>
      <li>Extraiga la tira de control del tubo Nara Biotec</li>
      <li>Agite por inversión suavemente el tubo hacia delante y hacia atrás durante 2 minutos</li>
      <li>Deje que el tubo se estabilice durante 30 minutos a temperatura ambiente.</li>
      <li>Agite con inversion una vez más; luego extraiga y deseche la tira de acuerdo a sus procedimientos de laboratorio habituales</li>
    </ol>
   </div>

</div>
</div>


@endsection