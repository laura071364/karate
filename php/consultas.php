<?php 

function conectarDB(){
    
    $host="localhost";
    $user="root";
    $pass="";
    $db="dbkarate";


    $conexion = mysqli_connect($host,$user,$pass,$db);
    mysqli_set_charset($conexion, "utf8");
        // if($conexion){
        //     echo 'La conexión de la base de datos se ha hecho satisfactoriamente
        //     ';
        // }else{
        //     echo 'Ha sucedido un error inesperado en la conexión de la base de datos
        //     ';
        // }   
    return $conexion;
}


function desconectarBD($conexion){

    $close = mysqli_close($conexion);

    // if($close){
    //     echo 'La desconexión de la base de datos se ha hecho satisfactoriamente';
    // }else{
    //     echo 'Ha sucedido un error inesperado en la desconexión de la base de datos';
    // }   

    return $close;
}

function consultaSQL($sql){
    //Creamos la conexión con la función anterior
    $conexion = conectarDB();

    //generamos la consulta

     //mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

    if(!$result = mysqli_query($conexion, $sql))die(); //si la conexión cancelar programa
    
    
    $rawdata = array(); //creamos un array
    //guardamos en un array multidimensional todos los datos de la consulta
     $i=0;

     while($row = mysqli_fetch_array($result))
     {       
         $rawdata[$i] = $row;
         $i++;
    }
     desconectarBD($conexion); //desconectamos la base de datos

    return $rawdata; //devolvemos el array
    
}

function add_del_enBD($sql){
    $terminado=true;

    $conexion = conectarDB();

    if(!$result = mysqli_query($conexion, $sql)){
        //die(); //si la conexión cancelar programa
        $terminado=false;
    }
    desconectarBD($conexion);
    
    return $terminado;
}


   
?>