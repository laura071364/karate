<?php
include '../php/database.php';

session_start();

$usuario = $_SESSION['username'];
$rol = $_SESSION['rol'];

if (!isset($usuario) || $rol != 1) {
	header('location:index.html');
}

$query = mysqli_query($conex, "select * from roles");
?>
<?php include '../otros/menu.html'; ?>
	<!-- fin menu--------------------------------->
	<div id="container">
		<h2 id="UserConected">Conectado:<?php echo ' ' . $usuario; ?></h2>
		<div id="titulo">
			<h2>CARGA ARBITROS Y JEFES TECNICOS</h2>
		</div><!-- <form action="../php/usuarios.php" method="POST"> -->
			<div class="lado">
				<fieldset class="botones">
					<legend>Acciones</legend>
					<button class="btn-agregar" id="crear" type="button" onclick="cargar">Crear</button>
					<button class="btn-buscar" id="buscar" type="button">Buscar</button>
					<button class="btn-eliminar" id="eliminar" type="button">Eliminar</button>

				</fieldset>
			</div>

			<div class="centro">

				<fieldset id="datosPersonales">
					<legend>Datos Personales</legend>

					<label class="dataPer-label">Nombre:</label>
					<input class="dataPer-input" type="text" id="nombre" placeholder="Ingrese Nombre/s"><br>

					<label class="dataPer-label">Apellido:</label>
					<input class="dataPer-input" type="text" id="apellido" placeholder="Ingrese Apellido/s"><br>

					<label class="dataPer-label">Escuela:</label>
					<input class="dataPer-input" type="text" id="escuela" placeholder="ingrese nombre de la escuela"><br>

					<label class="dataPer-label">Estilo:</label>
					<input class="dataPer-input" type="text" name="practica" id="estilo" placeholder="ingrese estilo de practica"><br>
					<textarea id="res"></textarea>
				</fieldset>

				<fieldset id="datosUsuario">
					<legend>Gestion de Usuarios</legend>


					<label class="dataUser-label">Usuario:</label>
					<input type="text" name="user" id="user" placeholder="ingrese nombre para usuario"><br>

					<label class="dataUser-label">Contraseña:</label>
					<input type="text" name="pass" id="pass" placeholder="ingrese contraseña"><br>
					<label class="dataUser-label">Rol:</label>
					<select onchange="">
						<option value="0" disabled>Seleccione Rol</option>
						<?php while ($datos = mysqli_fetch_array($query)) {
							?>
							<option value="<?php $datos['idRol'] ?>"><?php echo $datos['rol'] ?></option>
							<?php
						}
						?>
					</select>

				</fieldset>


			</div>
		<!-- </form> -->
	</div>
	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../js/usuarios.js?v=<?php echo (rand()); ?>"></script>
	
<?php include '../otros/footer.html';?>