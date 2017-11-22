<?php
include "db.php";
?>

<?php
session_start();

if (isset($_SESSION['u_user'])){
	echo "Bienvenido, ".$_SESSION['u_user'];
	echo "<a href='cerrar_secion.php'>¡Quieres cerrar secion?</a>";
}else{
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-with, initial-scale=1.0">
	<link rel = "shortcut icon" href="{{ url_for('static', filename='imgs/favicon.ico') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,900">
	<title>CHAT</title>
	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState ==4 && req.status ==200) {
					document.getElementById('chat1').innerHTML = req.responseText;
				}
			}
		}

		//hace que se refresque la pagina
		setInterval(function(){ajax();}, 500);
	</script>
	<style type="text/css"> //sirve para personalizar cada objeto en la pantalla
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

	.chatbox {
		width: 500px;
		min-width: 390px;
		height: 560px;
		background: #eee;
		padding: 25px;
		margin: 20px auto;
		box-shadow: 0 3px #ccc;
	}

	.chat_m {
		margin-top: 50px;
		width: 100%;
		height: 400px;
		overflow-x: hidden;
		overflow-y: scroll;
		background-color: #fff;
	}

	.chat_m::-webkit-scrollbar {
		width: 10px;

	}

	.chat_m::-webkit-scrollbar-thumb {
		border-radius: 5px;
		background-color: rgba(0,0,0,.1);
	}

	.chat_m {
		display: flex;
		flex-flow: row wrap;
		align-items: flex-start;
		margin-bottom: 10px;
	}

	.chat-form {
		margin-top: 20px;
		display: flex;
		align-items: flex-start;
	}

	.chat-form textarea {
		background-color: #fbfbfb;
		width: 100%;
		height: 50px;
		border: 2px solid #eee;
		border-radius: 3px;
		resize: none;
		font-size: 18px;
		color: #333;
		border-color: #999;
	}

	.chat-form textarea:focus {
		background-color: #fff;
	}

	.chat-form .button {
		width: 70px;
		height: 60px;
		border-radius: 50%;
		background-color: #1ddced;
		padding: 5px 15px;
		cursor: pointer;
	}

	.chat-form textarea::-webkit-scrollbar {
		width: 10px;

	}

	.chat-form textarea::-webkit-scrollbar-thumb {
		border-radius: 5px;
		background-color: rgba(0,0,0,.1);
	}

	.chat_m .datos_chat {
		margin: 10px;
		padding: 10px;
		margin-top: 5px;
	}

	.text_user {
		font-size: 40px;
		color: #1c62c4;

	}

	</style>
	
</head>
<body onload="ajax();"> 
	#de aqui se crean los objetos de la pantalla
	<div class="chatbox"> 
		<div class="text_user">
			<?php
				echo "Usuario: ".$_SESSION['u_user'];//muestra el nombre del usuario
			?>
		</div>
		<div class = "chat_m">
			<div id="chat_b">

				<?php
					$consulta = "SELECT * FROM chat1 ORDER BY id ASC";
					$ejecutar = $conexion->query($consulta);
					while($fila = $ejecutar->fetch_array()):
					?>
					//hace que aparezcan los mensajes
					<div class="datos_chat">
						<span style="color:#1c62c4;"><?php echo $fila["nombre"]; ?>:</span>
						<span style="color: #333;"><?php echo $fila["mensaje"]; ?></span>
						<span style="float: right;"><?php echo $fila["fecha"]; ?></span>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
			<form method="POST" action="chat.php">
				<div class="chat-form">
					<textarea type="text" name="mensaje"></textarea>
					<input class="button" type="submit" name="boton">
				</div>

			</form>
			//hace que los mensajes se guarden en la base de datos
		<?php 
			if (isset($_POST["boton"])) {
				$nombre = $_SESSION["u_user"];
				$mensaje = $_POST["mensaje"];
				$consulta = "INSERT INTO chat1 (nombre, mensaje) VALUES ('$nombre','$mensaje')";
				$ejecutar = $conexion->query($consulta);

				if ($ejecutar){
					echo "<embed loop='false' src='./static/beep.mp3' hidden='true' autoplay='true'>";
				}
			}
		?>
	</div>
	
</body>
</html>