<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<h1>Tienda de ropa</h1>
	<button type="submit"><a href="index.html">Inicio</a></button>
	<button type="submit"><a href="listar.php">Listar ropa</a></button>
	<button type="submit"><a href="buzos.php">Buzos</a></button>
	<button type="submit"><a href="nike.php">Nike</a></button>
	<button type="submit"><a href="mayor_500.php">Prendas + de $500</a></button>

	<h2>Lista de ropa</h2>
	<p>Ropa en stock</p>
	<table border="1">
	<tr>
		<th>ID</th>
		<th>TIPO DE PRENDA</th>
		<th>MARCA</th>
		<th>TALLE</th>
		<th>PRECIO</th>
		<th>FOTO</th>
	</tr>

	<?php
	//Conexión con la base de datos
	$conexion = mysqli_connect("127.0.0.1:33065", "root", "");
	mysqli_select_db($conexion, "lista_ropa");

	//Preparar la orden SQL

	$consulta="SELECT * FROM ropa WHERE tipo_prenda= 'buzo' ";

	//Ejecutar la orden y obtener los registros

	$datos= mysqli_query($conexion, $consulta);

	//Los datos de la base los convierte en un array y los guarda en $reg
	//Mostrar los datos del registro

	while ($reg= mysqli_fetch_array($datos)) { ?>
		<tr>
		<td><?php echo $reg['id']; ?></td>
		<td><?php echo $reg['tipo_prenda']; ?></td>
		<td><?php echo $reg['marca']; ?></td>
		<td><?php echo $reg['talle']; ?></td>
		<td><?php echo $reg['precio']; ?></td>
		<td><img src="data:image/png;base64, <?php echo base64_encode($reg['foto'])?>" alt="" width="100px" height="100px"></td>
		</tr>
	<?php } ?>
	</table>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>