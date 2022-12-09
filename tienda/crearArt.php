<?php
//Conexión con la base de datos

include('Db.php');

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
header('location: listar.php');

?>