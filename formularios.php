
<?php
	$empleados = $_POST["empleados"];
	$num = 1;


while ($num <= $empleados) { $num++; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nómina</title>
</head>
<body>
<h1>Nómina</h1>
	<form action="nomina.php" method="POST">
		<br><br>
		<label>Nombre Completo</label>
		<input type="text" name="nombre" required="">
		<br><br>
		<label>Salario</label>
		<input type="number" name="salario" required="">
		<br><br>
		<label>Días trabajados</label>
		<input type="number" name="dias" required="">
		<br><br>
		<input type="submit"  value="Calcular">
		<div id="contenido"></div>
	</form>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/funciones.js"></script>
</body>
</html>
<?php } ?>


	