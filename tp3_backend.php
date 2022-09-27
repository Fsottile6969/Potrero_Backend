<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<!-- Mostrar los números del 1 al 100. -->

<?php
$i = 1;
while ($i <= 100) {
	print" <p>$i</p>\n";
	$i++;
}
?>
<hr>
<!-- Mostrar los números del 100 al 1. -->

<?php
$i = 100;
while ($i >= 1) {
 	print" <p>$i</p>\n";
 	$i--;
}
?>

<hr>
<!-- Mostrar los números pares del 1 al 100. -->

<?php
for ($b = 0; $b < 101; $b+=2) {
 	print " <p>$b</p>\n";
}
?>

<hr>
<!-- Mostrar los números impares del 1 al 100. -->

<?php
for ($c = 1; $c < 101; $c+=2){
	print " <p>$c</p>\n";
}
?>

<hr>
<!-- Mostrar la suma de los números de 1 a 20. -->

<?php
$resultado=0;
for ($i = 0; $i < 21; $i++) {
	$resultado += $i;
} print " <p>La suma de los numeros del 1 al 20 es <span style='color:red'>$resultado</span></p>";
?>

<hr>
<!-- Mostrar la suma de los números pares de 1 a 20. -->

<?php
$resultado = 0;
for ($i= 0; $i < 21; $i+=2) {
	$resultado += $i;	
} print "<p>La suma de los numeros pares del 1 al 20 es <span style='color:violet'>$resultado</span></p>";
?>
</body>
</html>
