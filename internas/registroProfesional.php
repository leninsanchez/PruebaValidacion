<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Innova UTPL</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>

<body>
	<div class="headerContainer">
		<header class="cabeceraPrincipal">
			<img src="../images/logo.png" alt="Logo" title="logo">
			<hr>
			<h1>Evento Innova Investiga 2023</h1>
		</header>
		<nav class="menuPrincipal">
			<a href="../">Inicio</a>
			<a href="ponentes.php">Ponentes</a>
			<a href="registro.php">Registro</a>
			<a href="login.php">Login</a>
		</nav>
	</div>
	<hr>
	
	<main>
		<div class="boxCentrado">
		<h2 class="h2Login">Registro Profesionales</h2>
		<form method="post" action="procesarProfesional.php">
			<div class="grupoInput">
				<label for="nombres">Nombres</label>
				<input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre">
			</div>
			<div class="grupoInput">
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido">
			</div>
			<div class="grupoInput">
				<label for="cedula">Cedula</label>
				<input type="text" name="cedula" id="cedula" placeholder="Ingrese su cedula">
			</div>
			<div class="grupoInput">
				<label for="correo">Correo</label>
				<input type="email" name="correo" id="correo" placeholder="Ingrese su correo">
			</div>
			<div class="grupoInput">
				<label for="direccion">Direccion de domicilio</label>
				<input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion de domicilio">
			</div>
			<div class="grupoInput">
				<label for="telefono">Telefono</label>
				<input type="text" name="telefono" id="telefono" placeholder="Ingrese su telefono">
			</div>
			<div class="grupoInput">
				<label for="pais">Pais</label>
				<input type="text" name="pais" id="pais" placeholder="Ingrese su pais">
			</div>
			<div class="grupoInput">
				<label for="ciudad">Ciudad</label>
				<input type="text" name="ciudad" id="ciudad" placeholder="Ingrese su ciudad">
			</div>
			<div class="grupoInput">
			 <button type="submit" value="Procesar" class="btn-submit">Registrar</button>
			</div>
		</form>
		</div>
	</main>
	<footer class="piePagina"><h6>Derechos Reservados 2023</h6></footer>
</body>
</html>