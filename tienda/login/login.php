<?php
$usuario = $_POST['usuario'];
$contrasenia = $_POST['password'];

$ckuser = 'admin';
$ckpass = '1234';

if ($usuario == $user && $contrasenia == $ckpass) {
	header ('Location:Potrero_Backend/tienda/index.html');
} 
else {
	header ('Location:error.html');
}
?>