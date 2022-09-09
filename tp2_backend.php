<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php</title>
</head>
<body>

<!-- Crear una variable n y validar que sea un número positivo -->

<?php 
$numero = 5;
if ($numero >= 0) {
	echo "<h3 style='color:green'>La variable numero es un número positivo.</h3>";
}
?>

<!-- Crear una variable n y validar que sea un número mayor a 1 y menor a 10 -->

<?php 
$numero = 5;
if ($numero > 1 & $numero < 10) {
	echo "<h3 style='color:green'>La variable numero es mayor a 1 y menor a 10.</h3>";
}
?>

<!-- Crear una variable n y validar que sea un número mayor a 10 o menor a 2 -->

<?php 
$numero = 25;
if ($numero > 10 || $numero < 2) {
	echo "<h3 style='color:green'>La variable cumplió con una de las condiciones.</h3>";
} else {
	echo "<h3 style='color:green'>La variable no cumplió ninguna de las condiciones.</h3>";
}
?>

<!-- Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales -->

<?php 
$numero1 = 15;
$numero2 = 17;
if ($numero1 > $numero2) {
	echo $numero1 + $numero2 && $numero1 - $numero2;
} 
elseif ($numero1 < $numero2) {
	echo $numero1 * $numero2,"<br>";
	echo $numero1 / $numero2,"<br>"; 
	echo $numero1 % $numero2;
} 
else {
	echo "<h3 style=color:red>Los números ingresados son iguales.</h3>";
}
?>
</body>
</html>