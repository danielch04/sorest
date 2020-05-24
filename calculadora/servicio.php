<?php 
require_once('lib/nusoap.php');#bibliotecas
require_once('calculadora.php');

$server = new nusoap_server();/*inicio de sErvicio*/
$server -> register('calculadora');//registro del metodo

 $HTTP_RAW_POST_DATA = isset ($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
 $server-> service ($HTTP_RAW_POST_DATA);
?>