<?php
include "../php/consultas.php";

session_start();

$usuario = $_SESSION['username'];
$rol = $_SESSION['rol'];

if (!isset($usuario) || $rol != 1) {
	header('location:../index.html');
}
?>
<?php include '../otros/menu.html'; 
?>

<div id="container">
	<style type="text/css" ><?php include '../css/cuerpoAdmin.css'; ?></style>
	<!-- fin menu--------------------------------->
	<h2 id="UserConected">Conectado:<?php echo ' ' . $usuario; ?></h2><br>
	<div id="titulo">
		<h2 id="titulo">HOME</h2>
	</div>
	<form>
		<div id="div_categorias">
			<label id="label_categoria">CATEGORIAS:</label><br>
			<select id="categorias">
					
			</select>
		</div>
		<input type="text" id="oc">

		<div id="competidores">
			<table id="tabla-competidores">
			<thead>
					<tr>
						<th>COMPETIDORES</th>
						<th>GRUPO</th>
						<th>RONDA</th>
						<th>PUNTAJE FINAL</th>
						<th>PUESTO</th>
						<th>ACCIONES</th>
					</tr>				
				</thead>
				<tbody>
					<div id="cuerpo-tabla-competidores"></div>
				</tbody>

			</table>
		</div>

		<div id="tabla_arbitros">
			<table>
			<thead>
					<tr>
						<th>COMPETIDORES</th>
					</tr>				
				</thead>
				<tbody> 
					<div id="cuerpo-tabla-arbitros"></div>

				</tbody>
			</table>
		</div>
	</form>
<!-- <script type="text/javascript" src="jquery.min.js"></script> -->
	</div>
	<script type="text/javascript" src="../js/principal_admin.js?v=<?php echo (rand()); ?>"></script>
<?php include '../otros/footer.html';?>