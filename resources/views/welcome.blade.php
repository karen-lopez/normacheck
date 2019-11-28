<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>

	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!--Los iconos Solid de Fontawesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<!--Nuestro css-->
	<link rel="stylesheet" type="text/css" href="statics/css/index.css">

	<!--Fuentes-->
	<link href="https://fonts.googleapis.com/css?family=Cagliostro|Delius&display=swap" rel="stylesheet">
	<!--Footer-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<div class="modal-content navbar-inverse bg-dark">
		<nav class="navbar navbar-expand-lg navbar-light container">
		  <a class="navbar-brand" href="#">
		  	<img src="statics/img/logo2.png" alt="Site Logo" width="70">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{ url('user/profile') }}">Perfil</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{ url('/user/checklists') }}">CheckList</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="resumen.html">Resumen</a>
		      </li>
		    </ul>
		  </div>
		</nav>
	</div>

	<div class="container">
	  <div class="row">
	    <div class="col-lg-6">
	      <div class="modal-dialog text-justify" >
			<div class="col-sm-12 main-section">
				<div class="modal-content">
					<div class="col-sm-12 container">
						<h1><p class="sansserif text-white">NORMA CHECK</p></h1>
						<p class="serif">
							Norma Check proporciona a sus clientes un Checklist en el que podrá identificar los requerimientos incluidos en la norma técnica colombiana NTC-ISO-IEC 27001 para la realización de una auditoria interna sobre Sistemas de Gestión de la Seguridad de la Información.
						</p>
					</div>
				</div>
			</div>
		</div>
	    </div>
	  </div>
	</div>

	<!--Footer-->
	<div class="footer text-right">
		<a class="navbar-brand" href="https://normacheck.000webhostapp.com/">
		  	<p class="sansserif">Landing Page</p>
		</a>
  		<a class="navbar-brand" href="https://www.instagram.com/normacheckutp/">
		  	<img src="statics/img/instagram.png" alt="Site Logo" width="30">
		</a>
	</div>
	<!--Footer-->
</body>
</html>
