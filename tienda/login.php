<?php
error_reporting(0);
$usuario=$_POST['usuario'];
$password=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

include('Db.php');

$consulta="SELECT*FROM cliente where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion, $consulta);


if($filas=mysqli_fetch_array($resultado)){ //administrador
    if($filas['rol']==1){
        header("location:listar.php");
    }else{ //cliente
        header("location:catalogo.php");
    } 
}
else{
    header("location:error.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
