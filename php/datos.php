<?php
    include 'consultas.php';

    if(isset($_GET['idcat'])){
        $categoria=$_GET['idcat'];

    $con=conectarDB();
    $sql="select idCompetidor,nombre,apellido from competidores where idCompetidor = (Select id_comp from comp_cat where id_cat =$categoria)";
    $query = mysqli_query($con,$sql);
    
 
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "<Select id='sel-comp'>";
while($row = mysqli_fetch_assoc($query)) {

  echo "<option value='" . $row['idCompetidor'] . "'>". $row['nombre'] ." ".$row['apellido'] ."</option><br>";
}
echo "</select>";
// mysqli_close($con);
desconectarBD($con);
?>
</body>
</html>
<!--fin prueba-->
<?php
    }else
        echo "<h3>No se recibio la categoria</h3>";


?>