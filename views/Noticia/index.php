<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/barraMenu.css">
	<link href="themes/8/js-image-slider.css" rel="stylesheet" type="text/css" />
	<link href="themes/8/tooltip.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="themes/8/js-image-slider.js" type="text/javascript"></script>
	<script src="themes/8/tooltip.js" type="text/javascript"></script>
	<script src="js/slider.js"></script>
	<script src="js/cargarMas.js"></script>
	<script src="../js/buscar.js"></script>
</head>
<body>
	<header>
		<a href="../../views/Home"><div id="image"></div></a>
		<nav>
			
			<ul>
				<li><a href="../Home">Home</a></li>
				<li><a href="../Novedades">Novedades</a></li>
				<li><a href="../Consejos">Consejos</a></li>
				<li><a href="../Otros">Otros</a></li>
				<?php if(isset($_SESSION["username"])) {echo "<li><a href='../../controller/perfilusuario.php'>Perfil</a></li>";} else {echo "<li><a href='../../index.php'>Conectarse</a></li>";} ?>
			</ul>
		</nav>
	</header>
	<!--
		<nav id="busquedas">
			<p>Buscar por:</p>
			<ul>
				<li class="openForm"><a href="#">Titulo<span class="icon-chevron-down"></span></a>
				<ul>
					<li class="formBuscar">
					<form action="../controller/buscarLibro.php" method="post">
						<input type="text" name="autor"/>
						<input type="submit" value="Buscar"/>
						</form>
					</li>
				</ul>
				</li>
				<li class="openForm"><a href="#">Autor<span class="icon-chevron-down"></span></a>
				<ul>
					<li class="formBuscar">
						<form action="formBuscar.php">
						<input type="text" name="autor"/>
						<input type="submit" value="Buscar"/>
						</form>
					</li>
				</ul>
				</li>
				<li class="openForm"><a href="#">Genero<span class="icon-chevron-down"></span></a>
				<ul>
					<li class="formBuscar">
						<form action="formBuscar.php">
							<select name="genero" required>
								<option value="Aventura">Aventura</option>
								<option value="Bélicas">Bélicas</option>
								<option value="Biografía">Biografia</option>
								<option value="Ciencia Ficción">Ciencia Ficción</option>	
								<option value="Clásicos de la literatura">Clásicos de la literatura</option>
								<option value="Drama">Drama</option>
								<option value="Ensayo">Ensayo</option>
								<option value="Erótica">Erótica</option>
								<option value="Espionaje">Espionaje</option>
								<option value="Fantasía">Fantasía</option>
								<option value="Ficción literaria">Ficción literaria</option>
								<option value="Histórica">Histórica</option>
								<option value="Humor">Humor</option>
								<option value="Infantil">Infantil</option>
								<option value="Juvenil">Juvenil</option>
								<option value="Literatura contemporánea">Literatura contemporánea</option>
								<option value="Narrativa">Narrativa</option>
								<option value="Novela negra">Novela negra</option>
								<option value="Misterio">Misterio</option>
								<option value="Poesía">Poesía</option>
								<option value="Policíacas">Policíacas</option>
								<option value="Romántica">Romántica</option>
								<option value="Suspense">Suspense</option>
								<option value="Terror">Terror</option>
							</select>
							<input type="submit" value="Buscar"/>
						</form>
					</li>
				</ul>
				</li>
			</ul>
		</nav>
		-->
	<div id="content">	
		<div id="bookPortada">
			<img src="#Ruta#">
		</div>
		<div id="info">
			<p id="title">#Titulo#</p>
			<p>#Autor#</p>
			<p>#Fecha#</p>
		</div>
		<div id="desc">
			<p id"descrip">#Descripcion#</p>
		</div>
	</div>
</body>
</html>