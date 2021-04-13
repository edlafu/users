<?php session_start();
include "db/get_delete_users.php";
?> <!-- iniciamos sesion para poder trabjar con las variables de sesion e incluimos el archivo que genera las consultas de get y delete. -->
<!doctype html>
<html lang="es">
<head>
	<!-- Informació Meta -->
	<meta charset="utf-8"/>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Enllaç a l'arxiu CSS Extern -->
	<link rel=stylesheet href="css.css" type="text/css"/>

	<!--CSS Intern-->
	<style type="text/css">
	</style>

	<!-- Títol de la pàgina -->
	<title>Delete film</title>
</head>
<body>
	<header>	
		<!-- menu horizontal  -->
		<div class="contenedormenu"> <!-- Class hr-nav-2-->
    	<nav class="nav-container style-3">
        <a href="verpeliculas.php" class="nav-item">Ver o editar Filmoteca</a>
        <a href="nuevapelicula.php" class="nav-item">Añadir pelicula a la DB</a>
				<a href="cercador.php" class="nav-item">Hacer una busqueda</a>		
				<a href="about.php" class="nav-item">About</a>				
				<a href='index.php' class='nav-item'>Volver al inicio</a>	
			</nav>	
		</div>
	</header>
	<section>
		<article>
			<?php 
				$data = get_delete_users($_GET["id"]); //esta funcion genera un array con los datos de la pelicula que busca segun su id
				$id = $_GET["id"]; //generamos una variable que contendra el campo id cogido de la url.
				?> 
				<h2>Eliminar una pel·licula</h2>
				<div class="contenedoreliminar">
					<div class="itemeliminar">
					<?php
					echo "<img src='img/$data[6].jpg' class='cover'>";  //Mostramos el campo 6 del array data que contiene el nombre de la imagen y la insertamos en un img para que se muestre la caratula.
					?>
					</div>

					<!-- mostramos la información de la pelicula que se va a eliminar -->
					<div class="itemeliminar"> 
					<?php
					echo $data[0]."<br>"; 
					echo $data[1]."<br>"; 
					echo $data[2]."<br>"; 
					echo $data[3]."<br>"; 
					?>
					</div>
				</div>

				<form method="POST" action="db/deleteuserDB.php.php" name="eliminar_pellicula" id="eliminar_pellicula" enctype="multipart/form-data">
					<input type="hidden" name="id" id="id" value="<?php echo $id; ?>"><br>
					<label>Seguro que quieres eliminar la pelicula? No hay boton de deshacer...</label><br>

					<input type="submit" value="Si" class="botonpaginasañadirpelicula">
					<a href="index.php" class="botonpaginasañadirpelicula">No</a>
				</form>
				<br><br><a href='index.php' class='nav-item'>Volver al inicio</a>
			
		</article> 
	</section>
	<footer>
	Polliteca -2021 by ELF
	</footer>
</body>
</html>
