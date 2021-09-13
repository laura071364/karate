<?php
  include '../consultas.php';
 if(isset($_GET['idcat'])){
    $categoria=$_GET['idcat'];
    var_dump($categoria);
  }
  function consultarExisteCompetidor($nombre,$apellido,$edad,$genero){
    $con=conectarDB();

    $sql="SELECT * FROM competidores WHERE nombre = '".$nombre."' AND apellido="."'".$apellido."'nombre = ".$edad." AND genero='".$genero."' LIMIT 1";

    ?>
    <table>
      <thead>
      <tr>
        <th>Nombres</th>
        <th>apellido</th>
        <th>Edad</th>
        <th>Genero</th>
      </tr>
      </thead>
      <tbody>
      <?php


    $datos=array();

    $datos=consultaSQL($sql);

    var_dump($datos);

     //  while($row = mysqli_fetch_array($result)) {

     //    echo "<tr>";
     //    echo "<td>" . $row['nombre'] . "</td>";
     //    echo "<td>" . $row['apellido'] . "</td>";
     //    echo "<td>" . $row['edad'] . "</td>";
     //    if($row['genero']='f')
     //      echo "<td>Femenino</td>";
     //    else
     //      echo "<td>Masculino</td>";

     //    echo "</tr>";
     //  }
     //  echo "</tbody>";
     //  echo "</table>";
     // desconectarDB($con);
  }
?>