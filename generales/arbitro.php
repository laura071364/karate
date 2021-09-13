	<?php 
	 	session_start();

	 	
	 	$usuario=$_SESSION['username'];
	 	$rol= $_SESSION['rol'];
		$idUser=$_SESSION['idUser'];

	 	if(!isset($usuario) ||  $rol != 2){
	 		header('location:../index.html');
	 	}
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" type="text/css" href="../css/arbitro.css">
	    <title>Arbitro</title>
	</head>
	<body>
	    <header>
	    	<form class="cerrar-sesion" >
	    			<button type="submit" name="cerrar">Cerrar Sesion</button>
			</form>    		
				<?php 
					if(isset($_GET['cerrar'])) {
						session_unset();
						session_destroy();
						header('location:../index.html');
					}
				?>
	    </header>
			<h3 id="UserConected">Conectado:<?php echo' '. $usuario;?></h3>
				<input hidden type="text" value="<?php echo $idUser ?> ">
		<form action="" method="post">
			<fieldset id="datos-competidor">
				<legend> DATOS COMPETIDOR</legend>
				<div>
					<label>APELLIDO Y NOMBRE:</label><br>
					<p id="nya">LKLKLKLKLKL</p>	
				</div>
				<div>
					<label>CATEGORIA:</label><br>
					<p id="cat">JKLJKLJKJJÑJÑJKÑJÑK</p>
				</div>

			</fieldset>
			<div  id="titulo-puntajes">
				<label>PUNTAJES</label><br>
			</div>
			
			<div id="div-puntajes">
				
				<fieldset class="puntajes">
					<legend>ATLETICO</legend>
					<input type="range" name="pF" id="pF" min="5" max="10" step="0.2" value="5">
					<b><p class="puntos" id="pF-output" for="pF"></p></b>
				</fieldset class="puntajes">

				<fieldset class="puntajes">
					<legend>TECNICO</legend>
					<input type="range" name="pT" id="pT" min="5" max="10" step="0.2" value="5"><br>
					<b><p class="puntos" id="pT-output" for="pT" ></p></b>
				</fieldset>

			</div>
			<div id="terminar">
				<button id="nulo" onclick="votarNulo();">VOTAR NULO</button><br>
				<button  id="evaluar" type="submit">EVALUAR</button>
			</div>

		</form>		  		
	    		
		<footer>
			<hr>
			<h4>Copyright - Todos los derechos reservados. <br>Web Diseñada por RILA</h4>
		</footer>    			
		<script type="text/javascript" src="../js/funcionesArbitros.js"></script>
				
			
	</body>
	</html>