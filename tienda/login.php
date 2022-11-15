<?php
//Conexión con la base de datos
$conexion = mysqli_connect("127.0.0.1:33065", "root", "");
mysqli_select_db($conexion, "lista_ropa");

//Preparar la orden SQL

$consulta= "SELECT * FROM admins";

//Ejecutar la orden y obtener los registros

$datos= mysqli_query($conexion, $consulta);
$usuario = $_POST['usuario'];
$password = $_POST['password'];

session_start();
$_SESSION["$usuario"]=$usuario;

$ckuser = 'admin';
$ckpass = '1234';

if ($usuario == $user && $password == $ckpass) {
	header ('Location:listar.php');
} 
else {
	header ('Location:error.html');
}
?>