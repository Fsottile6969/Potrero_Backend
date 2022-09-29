<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
</head>
<body>
<!-- Crear un array de los 10 primeros numeros pares y mostrar en pantalla uno debajo de otro -->

<?php
$b = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
foreach ($b as $valor){
 	print "$valor\n";
}
?>

<!--  Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1. Sin asignar el indice de la matriz. Mostrar el esquema del array con print_r()-->

<?php 
$date = ["Pedro", "Ana", 34, 1];
	print_r($date);
?>

<!-- Crear un array asociativo e introducir los siguientes valores: Nombre: Pedro, Apellido: Torres, Direccion: Av. Mayor 3703, Telefono: 1122334455-->

<?php
$persona = ['Nombre' => "Pedro", 'Apellido' => "Torres", 'Direccion' => "Av. Mayor 3703", 'Telefono' => "1122334455"];
print_r ($persona);
?>

<!-- Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Angeles y Chicago.-->

<?php
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Chicago"];
    foreach ($ciudades as $indice => $ciudad){
        print("La ciudad con el indice $indice tiene el nombre de $ciudad.\n");
}
?>

<!-- Repite el ejercicio anterior pero ahora se ha de crear indices. MD para Madrid, BCL para Barcelona, LD para Londres, NY para New York, LA para Los Angeles y CCG para Chicago -->

<?php
$ciudades = ['Madrid' => "MD", 'Barcelona' => "BCL", 'Londres' => "LD", 'New York' => "NY", 'Los Angeles' => "LA", 'Chicago' => "CCG"];
foreach ($ciudades as $ciudad => $valor){
	print("El indice de $ciudad es $valor.\n");
}
?>
</body>
</html>