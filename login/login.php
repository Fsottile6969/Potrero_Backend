<?php
$usuario = $_POST['usuario'];
$contrasenia = $_POST['password'];

$ckuser = 'admin';
$ckpass = '1234';

if ($usuario == $user && $contrasenia == $ckpass) {
	header ('Location:https://fsottile6969.github.io/PotreroDigital/');
} 
else {
	header ('Location:error.html');
}
?>