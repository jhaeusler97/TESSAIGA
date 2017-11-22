<?php
// crea la conexion con el servidor y la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "proyecto";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

?>