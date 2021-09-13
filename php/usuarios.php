<?php
    include './consultas.php';


    if (!empty($_POST['nombre']) || !empty($_POST['apellido'])) {

        $nombre = $_POST['nombre'];
        $apellido =$_POST['apellido'];

        $conex=conectarDB();
        $query=$consulta = "SELECT * FROM usuarios WHERE nombre LIKE '$nombre%' LIMIT 1";
        
        if(!$result = mysqli_query($conex, $query)) die();
    
        $json = array();

        while ($row = mysqli_fetch_array($resul)) {
            $json[] = array(

                // 'id' => $row['id'],
                'nombre' => $row['nombre'],
                'apellido' => $row['apellido'],
                'escuela' => $row['escuela'],
                'estilo' => $row['estilo'],
                'user' => $row['username'],
                'pass'=> $row['password'],
                'rol' => $row['rol_id']
            );
        }
    $jsonString = json_encode($json);
    echo $jsonString;
    desconectarBD($conex);
}
?>