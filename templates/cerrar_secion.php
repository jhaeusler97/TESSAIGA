<?php //sirve para cerrar la cesion
session_start();
session_destroy();
header("location:login.php")
?>