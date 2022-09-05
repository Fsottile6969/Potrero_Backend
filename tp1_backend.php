<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Php</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<!-- Imprima por pantalla: "Hola mundo" -->
		<?php
		echo "Hola mundo";
		?>
		<br>

		<!-- Cargue en una variable la cadena de caracteres "Hola mundo" y luego la imprima por pantalla -->
		<?php
		$saludo = "Hola mundo";
		echo $saludo;
		?>
		<br>

		<!-- Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
		entera y el resto de la división entera -->

		<!-- suma -->
		<?php 
		$mes = 31;
		$semana = 7;
		echo $mes + $semana;
		?>
		<br>

		<!-- resta -->
		<?php 
		$mes = 31;
		$semana = 7;
		echo $mes - $semana;
		?>
		<br>

		<!-- multiplicación -->
		<?php 
		$mes = 31;
		$semana = 7; 
		echo $mes * $semana;
		?>
		<br>

		<!-- división -->
		<?php 
		$mes = 31;
		$semana = 7; 
		echo $mes / $semana;
		?>
		<br>

		<!-- resto -->
		<?php 
		$mes = 31;
		$semana = 7; 
		echo $mes % $semana;
		?>
		<br>

		<!-- Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
		pantalla -->
		<?php
		$celsius = 20;
		$fareheit = ($celsius * 9/5) + 32; 
		echo $fareheit,' °F';
		?>
		<br>

		<!-- Implementar algoritmos que permitan:
		Calcular el perímetro de un rectángulo, dado que su base es 18cm y su altura 12cm -->
		<?php 
		$base = 18;
		$altura = 12;
		$perimetro = ($base * 2) + ($altura*2);
		echo $perimetro,' cm';
		?>
		<br>

		<!-- Calcular el área de un rectángulo, dado que su base es 18cm y su altura 12cm -->
		<?php
		$base = 18;
		$altura = 12;
		$area = $base * $altura;
		echo $area,' cm2';
		?>
		<br>

		<!-- Calcular el perímetro de un círculo dado que su radio es de 30cm -->
		<?php
		$pi = 3.14159265;
		$radio = 30;
		$perimetro = 2 * $pi * $radio;
		echo $perimetro,' cm';
		?>
		<br>

		<!-- Calcular el área de un círculo dado que su radio es de 30cm -->
		<?php
		$pi = 3.14159265;
		$radio = 30;
		$area = $pi * $radio ** 2;
		echo $area,' cm2';
		?>
	</body>
</html>
