<?php
error_reporting(0);
session_start();
$sesion = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Document</title>
</head>
<body style="overflow-x: hidden; background-color: rgb(235, 235, 235)">
<div class="text-center text-danger fst-italic fw-bolder p-3" style="background-color: rgb(72, 72, 137); height: 150px; width: 100%;">
			<a href="index.php"><img src="../tienda/img/Logotipo 100x100 px.jpeg" alt="" class="img-fluid p-1 pt-2 m-0" style="width: 100px; border-radius: 100px;"></a> 
		</div>

		<nav class="navbar navbar-expand-lg navbar-light bg-primary bg-opacity-50">
			<div class="container-fluid w-auto">
				<button
					class="navbar-toggler w-auto"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNavDropdown"
					aria-controls="navbarNavDropdown"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon text-center"></span>
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

	<div class="row d-flex flex-nowrap justify-content-center">
		<div class="col d-flex flex-wrap px-1 m-4 justify-content-center" style="max-width: 1384px">
			<?php
			//Conexión con la base de datos
			include('Db.php');

			//Preparar la orden SQL

			$consulta= "SELECT * FROM ropa";

			//Ejecutar la orden y obtener los registros

			$datos= mysqli_query($conexion, $consulta);

			//Los datos de la base los convierte en un array y los guarda en $reg
			//Mostrar los datos del registro
					
			while ($reg= mysqli_fetch_array($datos)) { ?>
				<div class="card m-3 p-2 shadow-sm text-center" style="max-width: 13rem; min-width: 13rem; height: 380px">
					<div class="img mx-auto" style="width: 160px; height: 180px">
						<img class="img-fluid card-img-top p-0" src="data:image/png;base64, <?php echo base64_encode($reg['foto'])?>" alt="">
					</div>
					<div class="card-body flex-column">
						<div>
							<p class="card-text d-inline-block text-capitalize fw-bolder m-0"><?php echo $reg['tipo_prenda']; ?></p>
   							<p class="card-text d-inline-block text-capitalize fw-bolder m-0"><?php echo $reg['marca']; ?></p>
						</div>
						<div>
							<p class="card-text d-inline-block"><?php echo $reg['talle']; ?></p>
						</div>
						<div>
							<p class="card-text d-inline-block fw-lighter h4">$<?php echo $reg['precio']; ?></p>
						</div>
						<div class="btn text-end">
							<a href="carrito.php" class="btn btn-primary text-uppercase mt-4" href="carrito.php">comprar</a>
						</div>
					</div>								
				</div>
			<?php } ?>
		</div>		
	</div>
	<footer class="d-flex justify-content-center mb-0 p-0" style="background-color: rgb(72, 72, 137)">
		<p class="text-white text-lg-center pt-3">Realizado por Fs. Design </p>
		<p class="text-white pt-3">- Copyright 2022 ©</p>
	</footer>	

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	</body>
</html>