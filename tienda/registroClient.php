<?php
//Conexión con la base de datos

$conexion = mysqli_connect("127.0.0.1:33065", "root", "");
mysqli_select_db($conexion, "lista_ropa");

//Almacenamos los datos del envío POST
 
$nombre = $_POST ['nombre'];
$apellido = $_POST['apellido'];
$password = $_POST['password'];
$email = $_POST['email'];

//Preparar la orden SQL

$consulta = "INSERT INTO cliente (id,nombre,apellido,password,email)
          VALUES ('','$nombre','$apellido','$password','$email')";


//Ejecutar la orden y ingresamos datos y ejecutar la consulta

mysqli_query($conexion,$consulta);

//Rederigir a index
header('location: catalogo.php');
?>