<?php

	$nombre = $_POST['nombre'];
	$dias = $_POST['dias'];
	$salario = $_POST["salario"];
	$deudas = $_POST['deudas']; 
	$cesantias = $_POST['cesantias']; 
	$inte_censantias= $_POST['inte_censantias']; 
	$vacaciones = $_POST['vacaciones']; 
	

	$total_pago = $dias * $salario;
	$pension = $total_pago * 0.4;

	echo "Nombre: {$nombre} <br><br>";
	echo "Días trabajados: {$dias} <br><br>";
	echo "Salario: {$salario} <br><br>";
	echo "Pensión: {$pension}  <br><br>";
	echo "Deudas: {$deudas}  <br><br>";
	echo "Auxilio de Transporte: {$transporte} <br><br>";
	echo "Cesantias: {$cesantias} <br><br>";
	echo "Intereses de Cesantias: {$inte_censantias} <br><br>";
	echo "vacaciones: {$vacaciones} <br><br>";
	echo "Salario Total : {$total_pago}";

