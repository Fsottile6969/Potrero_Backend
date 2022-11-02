
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<title>Registrarse</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row d-flex justify-content-center">
			<div class="col-md-3 loginClient bg-light my-5 rounded-3 px-5 py-3">
				<form action="singupClient.php" method="post" class="formRegisterClient">
					<h2 class="titleForm text-uppercase text-black text-center my-3">registro</h2>
					<div class="mb-3">
						<label for="firstName" class="form-label text-uppercase text-black"
						>nombre</label
						>
						<input
						type="text"
						class="form-control mb-2" required
						id="firstName"
						aria-describedby="nameHelp"
						/><label for="lastName" class="form-label text-uppercase text-black"
						>apellido</label
						>
						<input
						type="text"
						class="form-control mb-2" required
						id="lastName"
						aria-describedby="lastNameHelp"
						/>
						<label for="exampleInputEmail1" class="form-label text-uppercase text-black"
						>email</label
						>
						<input
						type="email"
						class="form-control mb-2" required
						id="exampleInputEmail1"
						aria-describedby="emailHelp"
						/>
						<label
						for="exampleInputPassword1"
						class="form-label text-uppercase text-black"
						>contraseña</label
						>
						<input
						type="password"
						class="form-control mb-2" required
						id="exampleInputPassword1"
						/>
					</div>
					<button type="submit" class="btn btn-primary text-capitalize w-100 my-3">
						enviar
					</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include '../ecommerce/footer.php'?>
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