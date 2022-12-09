<?php
	error_reporting(0);
	session_start();
	$sesion = $_SESSION['usuario'];

	if($sesion == null || $sesion = ''){
		echo 'Debe iniciar sesion para poder ingresar a este archivo';
		die();
	}
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
<body style="overflow-x: hidden; background-color: rgb(235, 235, 235)">
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
						<li class="nav-item">
							<a class="nav-link text-white text-capitalize fw-bolder" href="cerrar_session.php"
								>cerrar sesion</a
							>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="row d-flex justify-content-evenly">
			<div class="col-md-3 p-4 h-50 border border-4 border-light my-5">
				<h4 class="text-center">Agregar prenda</h4>
				<form action="crearArt.php" method="post" enctype="multipart/form-data" class="d-flex justify-content-center flex-column p-3">
					<label>Tipo de Prenda</label>
					<input class="mb-2 mt-1" type="text" name="tipo_prenda" placeholder="Tipo de prenda" required>
					<label>Marca</label>
					<input class="mb-2 mt-1" type="text" name="marca" placeholder="Marca" required>
					<label>Talle</label>
					<input class="mb-2 mt-1" type="text" name="talle" placeholder="Talle" required>
					<label>Precio</label>
					<input class="mb-2 mt-1" type="text" name="precio" placeholder="Precio" required>
					<label>Foto</label>
					<input class="mb-2 mt-1" type="file" name="foto" placeholder="seleccionar" required>
					<input class="btn btn-primary mt-2" type="submit" name="submit" value="Crear">
				</form>
			</div>

			<div class="col-md-8 pt-5">
				<table class="table text-center mx-auto">
					<thead class="table-success table-striped">
						<td class="id">Id</td>
						<td class="tipo_prenda">Prenda</td>
						<td class="marca">Marca</td>
						<td class="talle">Talle</td>
						<td class="precio">Precio</td>
						<td class="foto">Foto</td>
						<td></td>
						<td></td>
					</thead>
					<tbody>
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
							<tr>
								<td class="align-middle"><?php echo $reg['id']; ?></td>
								<td class="align-middle"><?php echo $reg['tipo_prenda']; ?></td>
								<td class="align-middle"><?php echo $reg['marca']; ?></td>
								<td class="align-middle"><?php echo $reg['talle']; ?></td>
								<td class="align-middle"><?php echo $reg['precio']; ?></td>
								<td class="align-middle"><img src="data:image/png;base64, <?php echo base64_encode($reg['foto'])?>" alt="" width="100px" height="100px"></td>
								<th class="align-middle"><a href="modificar.php ?id=<?php echo $reg['id']?>" class="btn btn-info text-capitalize">editar</a></th>
								<th class="align-middle"><a href="borrar.php ?id=<?php echo $reg['id']?>" class="btn btn-danger text-capitalize">borrar</a></th>						
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<footer class="d-flex justify-content-center mb-0 p-0" style="background-color: rgb(72, 72, 137)">
			<p class="text-white text-lg-center pt-3">Realizado por Fs. Design </p>
			<p class="text-white pt-3">- Copyright 2022 ©</p>
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