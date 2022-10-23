<?php
$usuario = $_POST['usuario'];
$contrasenia = $_POST['password'];

$ckuser = 'admin';
$ckpass = '1234';

if ($usuario == $user && $contrasenia == $ckpass) {
	header ('Location:https://github.com/Fsottile6969/Potrero_Backend/tree/main/tienda');
} 
else {
	header ('Location:error.html');
}
?>