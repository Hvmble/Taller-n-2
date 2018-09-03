<?php

	$numero1 = $_POST['num1'];
	$numero2 = $_POST['num2'];
	$operacion = $_POST['operacion']; //+ - * /

	switch($operacion){
		case '+': suma($numero1, $numero2);
		break;
		case '-': resta($numero1, $numero2);
		break;
		case '*': multiplicacion($numero1, $numero2);
		break;
		case '/': division($numero1, $numero2);
		break;
		case '%': porcentaje($numero1, $numero2);
		break;
		case '^': potencia($numero1, $numero2);
		break;
		case '²': raiz($numero1,$numero2);
		break;
		case 'log': logaritmo($numero1,$numero2);
		break;
		default: echo "No es una operación válida";
	}

	function suma($num1, $num2){
		$resultado = $num1 + $num2;
		echo "{$num1} + {$num2} = {$resultado}";
	}

	function resta($numero1, $numero2){
		$resultado = $numero1 - $numero2;
		echo "{$numero1} - {$numero2} = {$resultado}";
	}

	function multiplicacion($numero1, $numero2){
		$resultado = $numero1 * $numero2;
		echo "{$numero1} * {$numero2} = {$resultado}";
	}

	function division($numero1, $numero2){
		$resultado = $numero1 / $numero2;
		echo "{$numero1} / {$numero2} = {$resultado}";
	}
	function porcentaje($numero1, $numero2){
		$resultado = $numero1 * $numero2 / 100;
		echo "{$numero1} % {$numero2} = {$resultado}";
	}
	function potencia($numero1, $numero2){
		$resultado1 = $numero1 * $numero1;
		$resultado2 = $numero2 * $numero2;
		echo "{$numero1} ^ {$numero1} = {$resultado1} <br>";
		echo "{$numero2} ^ {$numero2} = {$resultado2}";
	}
	function raiz($numero1,$numero2){
		$resultado1 = sqrt($numero1);
		$resultado2 = sqrt($numero2);
		echo "{$numero1} ²√  = {$resultado1} <br>";
		echo "{$numero2} ²√  = {$resultado2} <br>";
	}
	function logaritmo($numero1,$numero2){
		$resultado1 = log($numero1);
		$resultado2 = log($numero2);
		echo "{$numero1} logaritmo  = {$resultado1} <br>";
		echo "{$numero2} logaritmo  = {$resultado2} <br>";
	}