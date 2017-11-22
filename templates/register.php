<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-with, initial-scale=1.0">
	<link rel = "shortcut icon" href="{{ url_for('static', filename='imgs/favicon.ico') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,900">
	<title>REGISTER</title>
	<style type="text/css">//permite personalizar los objetos de la pantalla
	*{
		margin: 0;
		padding: 0;
	}

	html {
		font-size: 16px;
		font-family: "Lato", sans-serif;
	}

	body {
		height: 100vh;
		display: flex;
		justify-content: flex-end;
		align-items: down;
		background-color: #9AD1ED;
	}

	.register__container {
		background-color: #EFEFEF;
		width: 350px;
		border-top: solid .5rem #F39B53;
		box-sizing: border-box;
		padding: 3rem 0;
		box-shadow: 0 0 .5rem #8A8C8C;
	}

	.register__top {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.register__title {
		color: #8a8c8b;
	}

	.register__img {
		width: 8rem;
		align-items: center;
	}
	
	.register_form {
		display: flex;
		flex-direction: column;
		padding: 1.5rem 2rem 0;
	}
	
	input[type=text], [type=password] {
		height: .5rem;
		padding: 1rem;
		transition: all .7s;
	}

	input[type=text]:focus, [type=password]:focus {
		border-color: #C8C8C8;
		background-color: #EFEFEF;
	}

	.btn__submit {
		height: 2.5rem;
		border: none;
		background-color: #F39B53;
		color: white;
		padding: .5px;
		margin: .5rem auto;
		cursor: pointer;
	}

	.btn__submit:hover {
		background-color: #39A1E5;
	}

	.texto__registrarse {
		color: #6E6E6E;
		padding: .5px;
		font-size: .8em;
	}

	.fondo {
		width: 73rem;
	}
	</style>
</head>
//se crean los objetos de la pantalla
<body>
	<div style="position: relative; top: 0px;left: 0px">
		<img class="fondo" src="./static/imgs/fondo.png">
	</div>
	<div class="register__container">
		<div class="register__top">
    		<img class="register__img" src="./static/imgs/estampa.png" alt="">
    		<h2 class="register__title"> <span>REGISTRARSE</span></h2>
		</div>
		<form action="" method="post">
			<div style="position: relative; top:40px;left: 70px">  
			<input type="text" placeholder="&#128100; username" required autofocus, name = "username">
			</div>
			<div style="position: relative; top:70px;left: 70px"> 
			<input type="password" placeholder="&#128273; password" required, name = "pssw">
			</div>
			<div style="position: relative; top:110px;left: 120px"> 
			<a href="/login"><input class="btn__submit" type="submit" value="REGISTRARSE" name="boton"></a>
			</div>
			<div style="position: relative; top:120px;left: 70px">
			<h2 class="texto__registrarse"><span>Si ya estás registrado da click en entrar.</span></h2>
			</div>
			<div style="position: relative; top:130px;left: 130px"> 
			<a href="login.php" ><img src="./static/imgs/entrar.png" width="100px" height="30px"></a>
			</div>
		</form>
		<div style="position: relative; top:-194px;left: -820px">
			<img src="./static/imgs/tessaiga.png">
		</div>
		<?php 
			include "db.php";
			if (isset($_POST["boton"])) {
				if ($_POST['username']=="" or $_POST['pssw']==""){
					pass;
				}else{
					$sql='SELECT * FROM usuarios';
					$rec =mysqli_query($conexion,$sql);
					$verificar = 0;
					// //while ($resultado = mysqli_Fetch_onject($rec)){
					// 	if ($resultado->nombreusuario==$_POST["username"]){
					// 		$verificar =1;
					// 	}
					// }
					if($verificar==0){
					$nom=$_POST['nombreusuario'];
					$spw=$_POST['pssw'];
					$conexion->query("INSERT INTO chat (usuario,clave) VALUES ('$nom','$pssw')");
					mysqli_query($conexion, $sql);
					}else{
					echo "Ya estas registrado";
				
					}
				}
			}
		?>
		</div>
</body>
</html>