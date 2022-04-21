<?php

include 'formulario.php';

$cantidad=$_POST["cantidad"];
$conversion=$_POST["conversion"];


switch ($conversion) {
	case "1":
		$resultado = $cantidad/29.574;
		echo number_format($resultado,2, '.','.' ). " onzas fluidas";
		break;
	case "2":
		$resultado= $cantidad*1.094;
		echo $resultado. " yardas";
		break;
	case "3": 
		$resultado = $cantidad/454;
		echo $resultado. " libras";
		break;
	case "4":
		$resultado = ($cantidad*(9/5)+32);
		echo $resultado. " farenheith";
		break;
	case "5":
		$resultado = $cantidad/1.609;
		echo $resultado." millas";
		break;
	case "6":
		$resultado = $cantidad/26.1405;
		echo $resultado." libras esterlinas";
		break;
	default:
		echo "Por favor ingrese una cantidad y seleccione una opción";

	}
?>
