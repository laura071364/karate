<?php
    require_once 'consultas.php';

    function getListaCategorias(){
        
        $query="SELECT * FROM categorias";
        $conn=conectarDB();
        $result=mysqli_query($conn,$query);
        $listas='<option value="0" disabled selected>Elige una opcion...</option>';
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $listas.="<option value=$row[idCategoria]>$row[nCategoria]</option>";
        }
        desconectarBD($conn);
    return $listas;
    }
    
    echo getListaCategorias();

?>