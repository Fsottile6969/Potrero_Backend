<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link
			href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="/Potrero_Backend/ecommerce/assets/style/style.css"
		/>
</head>
<body>
	<h1>Acceder</h1>
	<form action="singupAdmin.php" method="post">
		<h1 class="title-form">registro</h1>
		<label class="label_user text-white" for="user">Nombre</label>
		<input class="input_user" type="text" name="nombre" placeholder="Ingrese su nombre" required />
		<label class="label_user text-white" for="user">Apellido</label>
		<input class="input_user" type="text" name="email" placeholder="Ingrese su apellido" required />
		<label class="label_user text-white" for="user">Email</label>
		<input class="input_user" type="text" name="email" placeholder="Ingrese su email" required />
		<label class="label_password text-white" for="password">Password</label>
		<input class="input_password" type="password" name="password" placeholder="Ingrese su password" required />
		<label class="label_password text-white" for="confirm_password">Password</label>
		<input class="input_password" type="confirm_password" name="password" placeholder="Confirme su password" required />
		<input class="boton" type="submit" name="submit" value="enviar" />
	</form>






		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
			integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
			integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
			crossorigin="anonymous"
		></script>
</body>
</html>