<?php 
    include 'php/database.php'; 

    $sql="SELECT * FROM categorias";

   $myArray = getArraySQL($sql);
   json_encode($myArray);
?>