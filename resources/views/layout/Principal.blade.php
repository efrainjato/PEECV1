<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Programa de Evaluacion Externa de Calidad</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body style="background-image: url(img/img4.jpg); background-repeat: no-repeat; background-position: center center; background-attachment: fixed; background-size: cover;" lang="es">
	@include('inc.navbar')
	
	<div class="container">
		@if(Request::is('/'))
			@include('inc.showcase')

		@endif
	<div class="row">
		<div class="col-md-8 col-lg-8">
			@include('inc.messages')
			@yield('content')
		</div>

		<!--<div class="col-md-4 col-lg-4">
			@include('inc.sidebar')
		</div>-->
	</div>
	</div>
	<footer id="footer" class="text-center">
		<p style="font-size: 25px; font-weight: 700;">Programa de Evaluación Externa de Calidad</p>
		<p>Av. Dr. Manuel Nava Núm.6 Zona Universitaria C.P. 78210 San Luis Potosí, S. L. P.</p>
		<p>Telefono y Fax:826 23 00 Ext. 6558 Email: peec.fcq@gmail.com </p>
	</footer>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
</body>
</html>