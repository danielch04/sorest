<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Soap</title>
	<style type="text/css">
	
	input {
	   background: yellow;
	   border: 1px solid black;
	   border-radius: 5px 5px 5px 5px;
	   color: #393939;
	   font-size: 12px;
	   padding: 5px;
	}
	#su{
	border: 1px; 
	background-color:lightcoral;
	border-radius: 10px;
	}
	select{
	border: 1px; 
	background-color:aqua;
	border-radius: 10px;	
	}
	</style>
</head>
<body>

<h1>Calculadora</h1>
<form action="calculadora.php" method="get">
Numero 1: <input type="text" name="x"><br><br>
Numero 2: <input type="text" name="y"><br><br>
Operacion: <select name="operacion">			<!--create select-->
	<option value="suma">Sumar</option>
	<option value="resta">Resta</option>
	<option value="multiplica">Multiplicar</option>
	<option value="division">Divide</option>
</select><br><br>
<input id="su" type="submit" value="Calcular">
</form>
</body>
</html>
<?php 
	require_once('lib/nusoap.php'); #biblioteca
	$cliente = new nusoap_client('http://localhost/calculadora/servicio.php');#namespace
	$resultado = $cliente->call('calculadora', array( 'x', 'y', 'operacion'));#invocacion del metodo con parametros
	echo $resultado; #mostrar resultado
 ?>