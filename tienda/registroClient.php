<?php
//Conexión con la base de datos

include('Db.php');

//Almacenamos los datos del envío POST

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$password = $_POST['password'];
$email = $_POST['email'];

//Preparar la orden SQL

$consulta = "INSERT INTO cliente (id, usuario, nombre, apellido, password, email) VALUES ('', '$usuario', '$nombre', '$apellido', '$password', '$email')";

//Ejecutar la orden y ingresamos datos y ejecutar la consulta

mysqli_query($conexion, $consulta);

//Rederigir a index
header('location: login.html');
?>