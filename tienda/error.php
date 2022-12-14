<?php
	error_reporting(0);
	session_start();
	$sesion = $_SESSION['usuario'];

	if($sesion == null || $sesion = ''){
		echo 'Debe iniciar sesion para poder ingresar a este archivo';
		die();
	}
	session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
	</head>
	<body
		style="
			box-sizing: border-box;
			overflow-x: hidden;
			background-color: rgb(235, 235, 235);
		"
	>
		<div
			class="text-center text-danger fst-italic fw-bolder p-3"
			style="background-color: rgb(72, 72, 137); height: 150px; width: 100%"
		>
			<a href="index.php"
				><img
					src="../tienda/img/Logotipo 100x100 px.jpeg"
					alt=""
					class="img-fluid p-1 pt-2 m-0"
					style="width: 100px; border-radius: 100px"
			/></a>
		</div>

		<nav class="navbar navbar-expand-lg navbar-light bg-primary bg-opacity-50">
			<div class="container-fluid w-auto">
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNavDropdown"
					aria-controls="navbarNavDropdown"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div
					class="collapse navbar-collapse text-center"
					id="navbarNavDropdown"
				>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a
								class="nav-link text-white text-capitalize fw-bolder"
								href="index.php"
								>inicio</a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link text-white text-capitalize fw-bolder"
								href="catalogo.php"
								>catalogo</a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link text-white text-capitalize fw-bolder"
								href="buzos.php"
								>buzos</a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link text-white text-capitalize fw-bolder"
								href="nike.php"
								>nike</a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link text-white text-capitalize fw-bolder"
								href="mayor_500.php"
								>+ de $500</a
							>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container-fluid">
			<div class="row d-flex justify-content-center" style="height: 65vh">
				<div class="col-md-12 d-flex flex-column justify-content-center p-1 align-items-center">
					<img src="../tienda/img/error.png" alt="" class="bg-warning p-3 border rounded-3 h-50">
					<h1 class="p_error fw-bold text-uppercase h3 my-4">
						Has ingresado tu usuario o contrase??a de forma incorrecta!!!
					</h1>
					<a class="btn btn-primary text-capitalize text-white" href="login.html">regresar</a>
				</div>
			</div>
		</div>

		<footer class="d-flex justify-content-center mb-0 p-0" style="background-color: rgb(72, 72, 137)">
			<p class="text-white text-lg-center pt-3">Realizado por Fs. Design -</p>
			<p class="text-white pt-3">Copyright 2022 ??</p>
		</footer>
		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
			integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
			integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
			crossorigin="anonymous"
		></script>
	</body>
</html>
