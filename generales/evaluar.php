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
<style type="text/css"><?php include '../css/eval.css'; ?></style>
    <h2 id="UserConected">Conectado:<?php echo ' ' . $usuario; ?></h2><br>
	<div id="titulo">
		<h2 id="titulo">CREAR EVALUACION</h2>
	</div>

	<form>
        
        <div id="div_categorias">
			<label id="label_categoria" for="categorias">CATEGORIAS:</label><br>
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
            <label id="check_cant_arb"></label>
		</div>

        <div id="box_arbitros">
            <label id="label_arbitros" for="selector_arbitros">ARBITROS</label><br/>
            <select name="selector_arbitros[]" id="selector_arbitros" multiple>
                   <option value="" disabled><strong>Seleccione los arbitros... ctrl+click varios</strong></option> 
                   <?php
					$arr=consultaSQL("SELECT id,nombre,apellido,rol_id FROM usuarios WHERE rol_id=2");
					 //print_r($arr);
					foreach ($arr as $clave) {
						?>
						<option value="<?php echo $clave['id']?>"><?php echo $clave['nombre'].' '.$clave['apellido']?></option><br>
						<?php
					}
				 ?>
            </select>
            
        </div>

    </form>
</div>
<script type="text/javascript" src="../js/evaluacion.js?v=<?php echo (rand()); ?>"></script>
<?php include '../otros/footer.html';?>