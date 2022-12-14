<?php
  // 1) Conexion
  // a) realizar la conexion con la bbdd
  // b) seleccionar la base de datos a usar
  include('Db.php');

 // 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];

// 3) Preparar la orden SQL
// => Selecciona todos los campos de la tabla alumno donde el campo dni sea igual a $dni
// a) generar la consulta a realizar
$consulta = "SELECT * FROM ropa WHERE id=$id";

// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$respuesta = mysqli_query($conexion, $consulta);

// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($respuesta);
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<title>Tienda de ropa</title>
    </head>
    <body style="background-color: rgb(235, 235, 235)">
        <?php
        // 6) asignamos a diferentes variables los respectivos valores del array $datos.
        $tipo_prenda=$datos["tipo_prenda"];
        $marca=$datos["marca"];
        $talle=$datos["talle"];
        $precio=$datos["precio"];
        $foto=$datos["foto"];?>

        <div class="container-fluid">
            <div class="row d-flex justify-content-center mt-5 pt-5 align-self-center">
                <div class="col-md-4 border border-4 border-light p-5">    
                    <h2 class="text-center">Modificar</h2>
                    <form action="" method="post" enctype="multipart/form-data" class="d-flex justify-content-center flex-column">
                    <label>Tipo de prenda</label>
                    <input class="mt-1 mb-2" type="text" name="tipo_prenda" placeholder="Tipo de Prenda" value="<?php echo        "$tipo_prenda"; ?>"> 
                    <label>Marca</label>
                    <input class="mt-1 mb-2" type="text" name="marca" placeholder="Marca" value="<?php echo "$marca"; ?>">
                    <label>Talle</label>
                    <input class="mt-1 mb-2" type="text" name="talle" placeholder="Talle" value="<?php echo "$talle"; ?>">
                    <label>Precio</label>
                    <input class="mt-1 mb-2" type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
                    <label>Imagen</label>
                    <input class="mt-1 mb-2" type="file" name="foto" placeholder="imagen">
                    <input class="mt-1 mb-2 bg-primary text-white" type="submit" name="guardar_cambios" value="Guardar Cambios" required>
                    <button class="mt-2" type="submit" name="Cancelar" formaction="listar.php">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
        if(array_key_exists('guardar_cambios',$_POST)){

            // 2') Almacenamos los datos actualizados del envío POST
            // a) generar variables para cada dato a almacenar en la bbdd
            // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
            // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
                    $tipo_prenda=$_POST['tipo_prenda'];
                    $marca=$_POST['marca'];
                    $talle=$_POST['talle'];
                    $precio=$_POST['precio'];
                    $foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));

            // 3') Preparar la orden SQL
            // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
            // a) generar la consulta a realizar
             $consulta = "UPDATE ropa SET tipo_prenda='$tipo_prenda', marca='$marca', talle='$talle', precio='$precio', foto='$foto' WHERE id =$id";

             // 4') Ejecutar la orden y actualizamos los datos
             // a) ejecutar la consulta
             mysqli_query($conexion, $consulta);

            // a) rederigir a index
            header('location: listar.php');

        }?>

        </div>
        <footer class="d-flex justify-content-center mb-0 p-0" style="background-color: rgb(72, 72, 137)">
			<p class="text-white text-lg-center pt-3">Realizado por Fs. Design </p>
			<p class="text-white pt-3">- Copyright 2022 ©</p>
		</footer>
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
