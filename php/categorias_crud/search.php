<?php 
include '../consultas.php';

if(isset($_GET['idcat'])){
	//echo $_GET['idcat'];
	$idCat=intval($_GET['idcat']);

	
	$datos=consultaSQL("SELECT * FROM categorias WHERE idCategoria=$idCat LIMIT 1");

	//var_dump($datos);
	echo "<table border='2px'>";
	echo "<tr>";
	echo "<th>Categorias</th>";
	echo "<th>Acciones</th>";
	echo "</tr>";
	foreach ($arr as $clave) {	
		echo "<tr align='center'>";
		echo "<td width=100px>".$clave["ncategoia"]."</td>";
		echo "<td width=100px><<a href="">Eliminar</a></td>";
		echo "</tr>";	
	}
	echo "</table>";
?>
}else{
	echo "No se recibio datos.";
}
?>