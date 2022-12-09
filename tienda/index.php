<?php
error_reporting(0);
session_start();
$sesion = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<title>Tienda de Ropa</title>
	</head>
	<body style="box-sizing: border-box; overflow-x: hidden; background-color: rgb(235, 235, 235)">
		<div class="text-center text-danger fst-italic fw-bolder p-3" style="background-color: rgb(72, 72, 137); height: 150px; width: 100%;">
			<a href="index.php"><img src="../tienda/img/Logotipo 100x100 px.jpeg" alt="" class="img-fluid p-1 pt-2 m-0" style="width: 100px; border-radius: 100px;"></a> 
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
							<a class="nav-link text-white text-capitalize fw-bolder" href="index.php"
								>inicio</a
							>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white text-capitalize fw-bolder" href="catalogo.php"
								>catalogo</a
							>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white text-capitalize fw-bolder" href="buzos.php"
								>buzos</a
							>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white text-capitalize fw-bolder" href="nike.php"
								>nike</a
							>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white text-capitalize fw-bolder" href="mayor_500.php"
								>+ de $500</a
							>
						</li>
						<?php
							if($sesion == null || $sesion = ''){
								echo'<li class="nav-item">
								<a class="nav-link text-white text-capitalize fw-bolder" href="login.html"
									>iniciar sesion</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white text-capitalize fw-bolder" href="registroClient.html"
									>registrarse</a
								>
							</li>';
							}
							else{
								echo'<li class="nav-item">
									<a class="nav-link text-white text-capitalize fw-bolder" href="listar.php"
										>administrador</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white text-capitalize fw-bolder" href="cerrar_session.php"
										>cerrar sesion</a>
								</li>';
							}
						?>
					</ul>
				</div>
			</div>
		</nav>

		<h3 class="pasos text-center text-black-50 pt-5">
			Disfruta de los mejores productos de manera sencilla!!!
		</h3>
		<div class="row" style="height: 40vh;">
			<div class="col d-flex flex-row flex-wrap justify-content-evenly my-5">
				<div class="preCard opacity-75 mx-3 d-flex">
					<div class="card bg-primary opacity-75" style="width: 18rem">
						<p
							class="text-card h2 text-uppercase text-center text-warning fw-bolder mt-4"
						>
							paso 1
						</p>
						<div class="card-body">
							<p class="card-text text-center text-white pt-0 p-4">
								Recorre nuestro sitio... <br> Conoce nuestros productos.
							</p>
						</div>
					</div>
				</div>
				<div class="preCard opacity-75 mx-3 d-flex">
					<div class="card bg-primary opacity-75" style="width: 18rem">
						<p
							class="text-card h2 text-uppercase text-center text-warning fw-bolder mt-4"
						>
							paso 2
						</p>
						<div class="card-body">
							<p class="card-text text-center text-white pt-0 p-4">
								Registrate para obtener una mejor experiencia.
							</p>
						</div>
					</div>
				</div>
				<div class="preCard opacity-75 mx-3 d-flex">
					<div class="card bg-primary opacity-75" style="width: 18rem">
						<p
							class="text-card h2 text-uppercase text-center text-warning fw-bolder mt-4"
						>
							paso 3
						</p>
						<div class="card-body">
							<p class="card-text text-center text-white pt-0 p-4">
								Luego del registro ya podes comenzar a operar.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="d-flex justify-content-center mb-0 p-0 fixed-bottom" style="background-color: rgb(72, 72, 137)">
			<p class="text-white text-lg-center pt-3">Realizado por Fs. Design -</p>
			<p class="text-white pt-3">Copyright 2022 ©</p>
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
