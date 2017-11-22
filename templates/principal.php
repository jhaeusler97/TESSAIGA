<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-with, initial-scale=1.0">
	<link rel = "shortcut icon" href="{{ url_for('static', filename='imgs/favicon.ico') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,900">
	<title>HOME</title>
	<style type="text/css">
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

	.logo {
		width: 15rem;
	}

	.fondo {
		width: 80rem;
	}
	</style>
</head>
<body>
	<div style="position: relative; top: 0px;left: 590px">
		<img class="fondo" src="./static/imgs/fondo.png">
	</div>
	<form>
		<div style="position: relative; top:300px;left: -400px">
			<img src="./static/imgs/tessaiga.png">
		</div>
		<div style="position: relative; top:-50px;left: -220px">
			<img class="logo" src="./static/imgs/estampa.png">
		</div>
		<div style="position: relative; top:90px;left: -220px"> 
			<a href="login.php" ><img src="./static/imgs/entrar.png" width="200px" height="50px"></a>
		</div>
		<div style="position: relative; top:110px;left: -220px"> 
			<a href="register.php" ><img src="./static/imgs/registrarse.png" width="200px" height="50px"></a>
		</div>
	</form>

</body>
</html>