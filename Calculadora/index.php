<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculador</title>
</head>
<body>
<h1>Calculadora</h1>
	<form action="calculadora.php" method="POST">
		<label>Numero 1</label>
		<input type="number" name="num1" required="">
		<br><br>
		<label>Operación</label>
		<select name="operacion" onchange="mostrar(this);">
			<button value="+">Suma</button>
			<option value="-">Resta</option>
			<option value="*">Multiplicación</option>
			<option value="/">División</option>
			<option value="%">Porcentaje</option>
			<option value="^">Potencia</option>
			<option class="raiz" value="²" >Raíz cuadrada</option>
			<option value="log">Logaritmo</option>
		</select>
		<br><br>
		<label>Numero 2</label>
		<input type="number" name="num2" required="">
		<br><br>
		<input type="submit"  value="Calcular">
		<div id="contenido"></div>
	</form>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/funciones.js"></script>
</body>
</html>

	