<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>HTML5 Contact Form</title>
	<link rel="stylesheet" media="screen" href="styles.css">
</head>
<body>
<header>
	<center><h1>CURRICULUM VITAE</h1></center>
</header>
<form class="Contact_form" action="" method="post" name="Contact_form">
	<ul>
		<li>
			<h2>Datos Personales</h2>
			<span class="required_notification">*Ingrese Formulario</span>
		</li>
		<li>
			<label for="name">Nombre:</label>
			<input type="text" name="nombre" placeholder="Ingrese Nombre"/>
		</li>
		<li>
			<label for="name">Apellido:</label>
			<input type="text" name="apellido" placeholder="Ingrese Apellido" />
		</li>
		<li>
			<label for="name">Telefono:</label>
			<input type="text" name="telefono" placeholder="Ingrese Telefono" />
		</li>
		<li>
			<label for="name">Codigo Postal:</label>
			<input type="text" name="codigoPostal" placeholder="Ingrese Codigo Postal" />
		</li>
		<li>
			<label for="email">Fecha Nacimiento:</label>
			<input type="text" name="fechaNacimiento" placeholder="dd/mm/yy" />
		</li>
		<li>
			<label for="email">Email:</label>
			<input type="text" name="email" />
			<span class="form_hint">Formato de Correo "alumno@hotmail.com"</span>
		</li>
		<li>
			<label for="message">Dirección:</label>
			<textarea name="message" cols="40" rows="6"></textarea>
		</li>
		<li>
			<label for="message">Incluir mi foto:</label>
			<input type="file" name="foto" />
		</li>
		<li>
			<button class="submit" type="submit">Guardar</button>
		</li>
	</ul>
</form>
</body>
</html>
<?php
if($_POST)
{
$nomb=$_POST["nombre"];
$apell=$_POST["apellido"];
$telf=$_POST["telefono"];
$codg=$_POST["codigoPostal"];
$fech=$_POST["fechaNacimiento"];
$eml=$_POST["email"];
$direc=$_POST["message"];
$fot=$_POST["foto"];
echo "El nombre es:".$nomb;
echo "<br>";
echo "El apellido es:".$apell;
echo "<br>";
echo "El telefono es:".$telf;
echo "<br>";
echo "El codigo postal es:".$codg;
echo "<br>";
echo "El fecha de nacimiento es:".$fech;
echo "<br>";
echo "El email es:".$eml;
echo "<br>";
echo "El direccion es:".$direc;
echo "<br>";
echo "La foto es:".$fot;
}
?>