<?php
include "../php/consultas.php";

session_start();

$usuario = $_SESSION['username'];
$rol = $_SESSION['rol'];


if (!isset($usuario) || $rol != 1) {
	header('location:../index.php');
}
?>

<?php include '../otros/menu.html'; ?>
<div id="container">

		<h2 id="UserConected">Conectado:<?php echo ' ' . $usuario; ?></h2>
		<!---fin usuario conectado----------- -->
		<div id="titulo">
			<h2>CARGA COMPETIDORES</h2>
		</div>
		<hr>
		<style type="text/css"><?php include '../css/Competidor.css';?></style>

		<form id="formulario" name="formulario" action="../php/Competidor_crud/add.php" method="POST">
		
			<fieldset id="data-pers">
				<legend>Datos Personales</legend>
				<div id="data-comp">
					<label class="label_datos" for="nombre">Nombre</label><br>
					<input type="text"  name="nombre" id="nombre" ><br>
					<label class="label_datos" for="apellido">Apellido</label><br>
					<input type="text"  name="apellido" id="apellido"><br>
					<label class="label_datos" for="edad">Edad</label><br>
					<input type="text"  name="edad" id="edad"><br>
				</div>
				<div id="radio-btn">
					<input type="radio" name="genero" value="f">Femenino<br>
					<input type="radio" name="genero" value="m" checked="true">Masculino<br>
					
				</div>
				
			</fieldset>
	
			<fieldset id="hab_cat">
				<legend>Habilitar Categorias</legend>
				
				<div><p id="indicaciones">Presione <strong>ctrl+click</strong> para elegir hasta 6 categorias</p></div>
					<select multiple name="categorias[]" id="categorias">
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
					
				
				<div>
					
				</div>
				
				<div id="botones">
					<a id="lnk-buscar" href="mod_del_competidores.php">Buscar</a>
					<button type="reset" class="btn-info">Limpiar</button>
					<button class="btn-agregar" id="agregar" name="agregar" type="submit">Agregar otro competidor</button>
				</div>
				 
			</fieldset>
			
		</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="../js/Competidor.js?v=<?php echo (rand()); ?>"></script>
		</div>
<?php include '../otros/footer.html';?>