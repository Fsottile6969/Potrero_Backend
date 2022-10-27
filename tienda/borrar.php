<?php
//Conexión con la base de datos

$conexion = mysqli_connect("127.0.0.1:33065", "root", "");
mysqli_select_db($conexion, "lista_ropa");

//Preparar la orden SQL

$consulta="DELETE FROM ropa WHERE id='' ";

//Ejecutar la orden y obtener los registros

$datos= mysqli_query($conexion, $consulta);

?>