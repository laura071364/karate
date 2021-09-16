<?php
  include '../consultas.php';
 // if(isset($_GET['idcat'])){
 //    $categoria=$_GET['idcat'];
    
 //  }
  $sql="SELECT * FROM competidores";

  // $conn=conectarDB();
  // $query=mysqli_query($conn,$sql);

  
  // $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

  $data=consultaSQL($sql);

  echo json_encode($data);//envio del array final en formato json

?>