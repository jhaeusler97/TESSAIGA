<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-with, initial-scale=1.0">
	<link rel = "shortcut icon" href="{{ url_for('static', filename='imgs/favicon.ico') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,900">
	<title>LOGIN</title>
	<style type="text/css">//se pueden personalizar los objetos de la pantalla
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
		justify-content: center;
		align-items: down;
		background-color: #9AD1ED;
	}

	.login__container {
		background-color: #EFEFEF;
		width: 350px;
		border-top: solid .5rem #F39B53;
		box-sizing: border-box;
		padding: 3rem 0;
		box-shadow: 0 0 .5rem #8A8C8C;
	}

	.login__top {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.login__title {
		color: #8a8c8b;
	}

	.login__img {
		width: 8rem;
		align-items: center;
	}
	
	.login_form {
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

	.btn__registrarse {
		height: 2.5rem;
		border: none;
		background-color: #31B1E5;
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
	<div class="login__container">
    	<div class="login__top">
    		<img class="login__img" src="./static/imgs/estampa.png" alt="">
    		<h2 class="login__title"> <span>INGRESAR</span></h2>
		</div>
		<form method="POST" action="login_b.php">
			<div style="position: relative; top:50px;left: 70px">  
			<input type="text" placeholder="&#128100; username" required autofocus, name = "usuario">
			</div>
			<div style="position: relative; top:90px;left: 70px"> 
			<input type="password" placeholder="&#128273; password" required, name = "password">
			</div>
			<div style="position: relative; top:100px;left: 148px"> 
			<input class="btn__submit" type="submit" value="ENTRAR" name="submit">
			</div>
			<div style="position: relative; top:160px;left: 130px"> 
			<a href="register.php" ><img src="./static/imgs/registrarse.png" width="100px" height="30px"></a>
			</div>
			<div style="position: relative; top:100px;left: 50px">
			<h2 class="texto__registrarse"><span>Si no estás registrado da click en registrarse.</span></h2>
			</div>
		</form>
		<div style="position: relative; top:-150px;left: -820px">
			<img src="./static/imgs/tessaiga.png">
		</div>
	</div>

</body>
</html>