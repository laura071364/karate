<?php
    include 'consultas.php';

    if(isset($_GET['idcat'])){
        $categoria=$_GET['idcat'];

    $con=conectarDB();
    $sql="select idCompetidor,nombre,apellido from competidores where idCompetidor = (Select id_comp from ev_comp where id_cat =$categoria)";
    $query = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "<table>
<tr>
<th>Nombres</th>
<th>Apellido</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['Hometown'] . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
}
echo "</table>";

desconectarBD($con);
?>
</body>
</html>
<!--fin prueba-->
<?php
    }else
        echo "<h3>No se recibio la categoria</h3>";


?>