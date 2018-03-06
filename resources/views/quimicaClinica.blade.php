@extends('layout.Principal')

@section('content')
<br>
<div class="text-center container">
	<h3 class="subTitulos">REGISTRO DE RESULTADOS DEL AREA DE QUIMICA CLINICA BIMESTRAL</h3>
</div>
</br>
<div>
	<h5 class="subTitulos" style="color: red">Seleccione el número de método en la parte baja.</h5>
</div>
<div class="table-responsive container">
 <form>
 <table class="table table-bordered table-striped table-condensed">
    
    <tr style="background-color: black; color: white">
       <th>Analito</th>
       <th>Unidades</th>
       <th>Resultado</th>
       <th>Método</th>
    </tr>
    
    <tr style="background-color: white">
       <td width="150">1 Glucosa</td>
       <td width="150">(mg/dL)</td>
       <td width="150"><input name="res" type="text" size="35" maxlength="35"></td>
       <td width="150">
       	<select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		</select>
       </td>
    </tr>

    <tr>
       <td width="150">2 Urea</td>
       <td width="150">(mg/dL)</td>
       <td width="150"><input name="apellidoM" type="text" size="35" maxlength="35"></td>
 	   <td width="150">
       	<select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		</select>
       </td>
    </tr>

    <tr style="background-color: white">
       <td width="180">3 Creatinina</td>
       <td width="150">(mg/dL)</td>
       <td width="150"><input name="email" type="text" size="35" maxlength="35"></td>
 	   <td width="150">
       	<select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		</select>
       </td>    
   </tr>

    <tr>
         <td width="150">4 Acido Urico</td>
         <td width="150">(mg/dL)</td>
         <td width="150"><input name="edad" type="text" size="35" maxlength="2"></td>
		 <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
       </td>    
   </tr>

    <tr style="background-color: white">
         <td width="150">5 Proteinas Totales</td>
         <td width="150">(g/dL)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
 		<td width="150">
       	<select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		</select>
       </td>       
    </tr>

      <tr>
         <td width="150">6 Albumina</td>
         <td width="150">(g/dL)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
	     <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
       </td>      
   </tr>

       <tr style="background-color: white">
         <td width="150">7 Bilirrumina Total</td>
         <td width="150">(mg/dL)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
   </tr>

      <tr>
         <td width="150">8 Colesterol</td>
         <td width="150">(mg/dL)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
     </tr>

      <tr style="background-color: white">
         <td width="150">9 HDL-Colesterol</td>
         <td width="150">(mg/dL)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
     </tr>

      <tr>
         <td width="150">10 Triglicéridos</td>
         <td width="150">(mg/dL)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
     </tr>      

      <tr style="background-color: white">
         <td width="150">11 ALT</td>
         <td width="150">(U/L)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
     </tr>

      <tr>
         <td width="150">12 AST</td>
         <td width="150">(U/L)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
     </tr>

      <tr style="background-color: white">
         <td width="150">13 F ALC</td>
         <td width="150">(U/L)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
     </tr>

      <tr>
         <td width="150">14 LDH</td>
         <td width="150">(U/L)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
     </tr>

      <tr style="background-color: white">
         <td width="150">15 AML</td>
         <td width="150">(U/L)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
     </tr>

      <tr>
         <td width="150">16 CK-T</td>
         <td width="150">(U/L)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
     </tr>

      <tr style="background-color: white">
         <td width="150">17 Sodio</td>
         <td width="150">(mEq/L)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
     </tr>

      <tr>
         <td width="150">18 Potasio</td>
         <td width="150">(mEq/L)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
     </tr>

      <tr style="background-color: white">
         <td width="150">19 Cloro</td>
         <td width="150">(mEq/L)</td>
         <td width="150"><input type="text" size="35" maxlength="2"></td>
         <td width="150">
       	  <select class="form-control" id="sel1">
    		<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
  		  </select>
         </td>      
     </tr>
</table>
</form>
</div>

</br>
<div class="table-responsive container">
 <form>
 <table class="table table-bordered table-striped">
    
    <tr style="background-color: black; color: white">
       <th>Metodo</th>
       <th>Identificación de Métodos para el área de Hematología</th>
    </tr>
    
    <tr style="background-color: white">
       <td width="150">1</td>
       <td width="150">Manual</td>
    </tr>

    <tr>
        <td width="150">2</td>
       <td>Automatizado</td>

    </tr>

    <tr style="background-color: white">
      <td width="150">3</td>
      <td width="150">ABBOTT:(RUBY, Cell-Dyn Emerald, Cell-Dyn 1200,1400,1500,<br>1600,1700,1800,3200,3500,3700)</td>
    </tr>

    <tr>
      <td width="150">4</td>
      <td width="150">ABX:(Pentra 60, 80, 120 Micros60)</td>
    </tr>

    <tr style="background-color: white">
       <td width="150">5</td>
       <td width="150">BECKMAN-COULTER:(ACT 8,10,Diff,5 Diff,5 Diff AL, T, JT, <br>MD, Onyx, MaxM, STKS, HmX, GenS, SERIE LH </td>
    </tr>

      <tr>
         <td width="150">6</td>
         <td width="150">CELLTAC ALFA/E/F NIHON KOHDEEN-IMPROMED</td>
      </tr>

       <tr style="background-color: white">
          <td width="150">7</td>
          <td width="150">LINCON:(HEMAT 18)</td>
      </tr>

      <tr>
        <td width="150">8</td>
        <td width="150">MINRAY: (BC-2300, BC-2800, BC-3000plus, BC-3200, <br>BC-5300, BC-5500 )</td>
      </tr>

      <tr style="background-color: white">
        <td width="150">9</td>
        <td width="150">SIEMENS Advia 60, 120)</td>
      </tr>
      
      <tr>
        <td width="150">10</td>
        <td width="150">SYSMEX: (XT-1800i, XT-2000i, K-1000, K-4500, KX-21, KX-21M, <br>F-820,SF-3000 )</td>
      </tr>

      <tr style="background-color: white">
        <td width="150">11</td>
        <td width="150">Otras marcas de autorizador</td>
      </tr>

</table>
</form>
</div>

	</br>
	<div>
		{{Form::submit('Registrar', ['class' => 'btn btn-primary'])}}
	</div>

@endsection