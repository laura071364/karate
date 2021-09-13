<?php
    require_once 'consultas.php';

    function getListaArbitros(){
        if(isset($_POST['id']) && is_numeric($_POST['id'])){
            $id=$_POST['id'];
        }else{
            $id=0;
        }

        $query="SELECT `idCompetidor`,`nombre`,`apellido` FROM `competidores` WHERE `idCompetidor`=(SELECT `id_comp` FROM `comp_cat`WHERE `id_cat`=$id)";
        $conn=conectarDB();
        $result=mysqli_query($conn,$query);
        $arb='';
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $arb.="<tr><td>$row[nombre] $row[apellido]</td></tr>";
        }
        desconectarBD($conn);
    return $arb;
    }
    
    echo getListaCompetidores();

?>