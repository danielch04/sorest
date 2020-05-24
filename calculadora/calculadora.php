<h2 style="font-family: sans-serif;color:lightcoral; "> Resultado</h2>

<?php
$x = $_GET['x'];
$y = $_GET['y'];
$operacion = $_GET['operacion'];

	function calculadora($x,$y, $operacion){#metodo
		if($operacion == "suma"){
			return $x + $y;
		}else if($operacion == "resta"){
			return $x - $y;
		}else if($operacion == "multiplica"){
			return $x * $y;
		}else if($operacion == "divide"){
			return $x / $y;}
		return 0;
	}
	echo calculadora($x, $y, $operacion);
 ?>