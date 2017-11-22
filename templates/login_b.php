<?php //permite loguearse en el sitio web
include "db.php";
session_start();
$usuario =$_POST['usuario'];
$password =$_POST['password'];

$proceso = $conexion->query("SELECT * FROM chat WHERE usuario = '$usuario' AND clave = '$password'");
if($resultado =mysqli_fetch_array($proceso)){
	$_SESSION['u_user'] = $usuario;
	header("location:chat.php");
	
}else{
	header("location:login.php");
}
?>