<?php
//Conexión con la base de datos

$conexion = mysqli_connect("127.0.0.1:33065", "root", "");
mysqli_select_db($conexion, "lista_ropa");

//Almacenamos los datos del envío POST
 
$tipo_prenda = $_POST ['tipo_prenda'];
$marca = $_POST['marca'];
$talle = $_POST['talle'];
$precio = $_POST['precio'];
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

//Preparar la orden SQL

$consulta = "INSERT INTO ropa (id,tipo_prenda,marca,talle,precio,foto)
          VALUES ('','$tipo_prenda','$marca','$talle','$precio','$foto')";


//Ejecutar la orden y ingresamos datos y ejecutar la consulta

mysqli_query($conexion,$consulta);

//Rederigir a index
header('location: index.html');

?>