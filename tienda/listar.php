<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Tienda de ropa</h1>
	<button type="submit"><a href="index.html">Inicio</a></button>
	<button type="submit"><a href="listar.php">Listar ropa</a></button>
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

	$consulta= "SELECT * FROM ropa";

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
		<td><img src="data:/img;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="100px"></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>