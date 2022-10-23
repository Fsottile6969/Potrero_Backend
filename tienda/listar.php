<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Document</title>
</head>
<body style="overflow-x: hidden">
<h1 class="titlee text-center text-danger fst-italic fw-bolder p-3">
			TDR - Tu lugar para vestirte
		</h1>

		<nav class="navbar navbar-expand-lg navbar-light bg-danger bg-opacity-50">
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
							<a class="nav-link text-capitalize fw-bolder" href="index.html">inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-capitalize fw-bolder" href="listar.php">catalogo</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-capitalize fw-bolder" href="buzos.php">buzos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-capitalize fw-bolder" href="nike.php">nike</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-capitalize fw-bolder" href="mayor_500.php"
								>+ de $500</a
							>
						</li>
					</ul>
					<button type="button" class="btn btn-danger opacity-75 text-capitalize" href="../login/login.html">login
					</button>
				</div>
			</div>
		</nav>
	<div class="row d-flex flex-nowrap justify-content-center">
		<div class="col d-flex flex-wrap px-1 m-4 justify-content-center" style="max-width: 1184px">
			<?php
			//Conexión con la base de datos
			$conexion = mysqli_connect("127.0.0.1:33065", "root", "");
			mysqli_select_db($conexion, "lista_ropa");

			//Preparar la orden SQL

			$consulta= "SELECT * FROM ropa";

			//Ejecutar la orden y obtener los registros

			$datos= mysqli_query($conexion, $consulta);

			//Los datos de la base los convierte en un array y los guarda en $reg
			//Mostrar los datos del registro
					
			while ($reg= mysqli_fetch_array($datos)) { ?>
				<div class="card m-3 p-2" style="width: 12rem; min-width: 12rem; height: 330px";>
					<img class="card-img-top p-0" src="data:image/png;base64, <?php echo base64_encode($reg['foto'])?>" alt="" width="224px" height="224px">
					<div class="card-body">
   						<p class="card-text d-inline-block"><?php echo $reg['tipo_prenda']; ?></p>
   						<p class="card-text d-inline-block"><?php echo $reg['marca']; ?></p><br>
						<p class="card-text d-inline-block"><?php echo $reg['talle']; ?></p>
						<p class="card-text d-inline-block"><?php echo $reg['precio']; ?></p>
					</div>								
				</div>
			<?php } ?>
		</div>		
	</div>	

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	</body>
</html>