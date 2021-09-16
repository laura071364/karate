<?php
include "../php/consultas.php";

session_start();

$usuario = $_SESSION['username'];
$rol = $_SESSION['rol'];

if (!isset($usuario) || $rol != 1) {
	header('location:../index.php');
}
include '../otros/head.html';
?>
</head>
<body>
<?php
include '../otros/menu.html'; 
?>
	<div id="container">
		
		<h2 id="UserConected">Conectado: <?php echo ' ' . $usuario; ?></h2>
		<!---fin usuario conectado----------- -->

		<div id="titulo">
			<h2>MODIFICAR PUNTAJES</h2>
		</div>

		<form id="combo" action="../php/datos.php" method="POST">
		<fielset id="cmbx-comp">
			<div id="div_categorias">
				<label id="label_categoria">CATEGORIAS:</label><br>
				<select id="categorias">
					<option value="" disabled>Seleccione categoria</option>
				<?php
					$arr=consultaSQL("SELECT * FROM categorias");
					 //print_r($arr);
					foreach ($arr as $clave) {
						?>
						<option value="<?php echo $clave['idCategoria']?>"><?php echo $clave['nCategoria']?></option><br>
						<?php
					}
				 ?>
				</select>
				<span id='resultado'></span>
			</div>
			
			<div id="competidores">
			<!--DONDE SE CARGA EL COMPETIDOR-->
			</div>

			<button class="btn-buscar">Buscar</button>
		</fielset>

		</form>
		
		<div id="div-tabla-comp">
			<table>

				<th>Competidores</th>

				<tr>
					<td nowrap><p>ajfaljflaj</p></td>
					<td><button class="btn-eliminar">Eliminar</button></td>
				</tr>
				<tr>
					<td><p>ajfaljflaj</p></td>
					<td><button class="btn-eliminar">Eliminar</button></td>
				</tr>
			</table>
		</div>
	
	
		<div id="div-arbitro">
				<label id="label_arbitro">Arbitros:</label><br>
				<select id="categoria">
					<option value="0" selected>Seleccione Arbitro...</option>
					<?php
					$conex = conectarDB();
					$query = mysqli_query($conex, "select id,nombre,apellido from usuarios");
					while ($datos = mysqli_fetch_array($query)) {
					?>
						<option value="<?php echo $datos['id'];?>"><?php echo $datos['nombre'].' '. $datos['apellido'];?></option>
					<?php
					}
					desconectarBD($conex);
					?>
				</select>

			<button class="btn-agregar">Agregar</button>

		</div>
	
	
		<div id="div-tabla-arb">
			<table>
				<tr>
					<th>Arbitros</th>

				</tr>
				<tr>
					<td><p>ajfaljflaj</p></td>
					<td><button class="btn-eliminar">Eliminar</button></td>
				</tr>
				
				<tr>
					<td><p>ajfaljflaj</p></td>
					<td><button class="btn-eliminar">Eliminar</button></td>
				</tr>
			</table>
		</div>
		<script type="text/javascript" src="../js/puntajeAjax.js?v=<?php echo (rand()); ?>"></script>
		
	</div>
<?php include '../otros/footer.html';?>
</body>
</html>