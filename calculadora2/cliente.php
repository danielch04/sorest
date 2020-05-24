	<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Rest</title>
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
<h1>Calculadora</h1>
<form action="cliente.php" method="get">
Numero 1: <input type="text" name="a"><br> <br>
Numero 2: <input type="text" name="b"><br> <br>
Operacion: <select name="action">			<!--create select-->
	<option value="suma">sumar</option>
	<option value="resta">Resta</option>
	<option value="multiplicacion">Multiplicar</option>
	<option value="division">Division</option>
</select><br><br>
<input id="su" type="submit" value="Calcular">
</form>
</head>
<body>

<?php #operacion suma
if (isset($_GET["action"]) && $_GET["action"]=="suma"){
$calculadora = file_get_contents('http://localhost/calculadora2/servicio.php?action=suma&a=' .$_GET["a"].'&b=' .$_GET["b"]);
$calculadora= json_decode($calculadora, true);
?>
<h1>SUMA</h1>
<TABLE>
	<tr><td>Primer numero: </td><td> <?php echo $calculadora["a"]  ?></td></tr>	
	<tr><td>Segundo numero: </td><td> <?php echo $calculadora["b"]  ?></td></tr>	
	<tr><td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3></td></tr>
</TABLE>
<?php
}
#operacion resta
if (isset($_GET["action"]) && $_GET["action"]=="resta"){
$calculadora = file_get_contents('http://localhost/calculadora2/servicio.php?action=resta&a=' .$_GET["a"].'&b=' .$_GET["b"]);
$calculadora= json_decode($calculadora, true);
?>
<h1>RESTA</h1>
<TABLE>
	<tr><td>Primer numero: </td><td> <?php echo $calculadora["a"]  ?></td></tr>
	<tr><td>Segundo numero: </td><td> <?php echo $calculadora["b"]  ?></td></tr>
	<tr><td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3></td></tr>
</TABLE>
<?php
}

#operacion multiplicacion
if (isset($_GET["action"]) && $_GET["action"]=="multiplicacion"){
$calculadora = file_get_contents('http://localhost/calculadora2/servicio.php?action=multiplicacion&a=' .$_GET["a"].'&b=' .$_GET["b"]);
$calculadora= json_decode($calculadora, true);
?>
<h1>MULTIPLICACION</h1>
<TABLE>
	<tr><td>Primer numero: </td><td> <?php echo $calculadora["a"]  ?></td></tr>
	<tr><td>Segundo numero: </td><td> <?php echo $calculadora["b"]  ?></td></tr>
	<tr><td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3></td></tr>
</TABLE>
<?php
}

#operacion division
if (isset($_GET["action"]) && $_GET["action"]=="division"){
$calculadora = file_get_contents('http://localhost/calculadora2/servicio.php?action=division&a=' .$_GET["a"].'&b=' .$_GET["b"]);
$calculadora= json_decode($calculadora, true);
?>
<h1>DIVISION</h1>
<TABLE>
	<tr><td>Primer numero: </td><td> <?php echo $calculadora["a"]  ?></td></tr>
	<tr><td>Segundo numero: </td><td> <?php echo $calculadora["b"]  ?></td></tr>
	<tr><td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3></td></tr>
</TABLE>
<?php
}

?>