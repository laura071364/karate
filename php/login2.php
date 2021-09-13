<?php    
    include './consultas.php';

    if(isset($_POST['envio']))
    {
       
        $user =trim($_POST['username']);
        $pass =trim($_POST['password']);

        $conex=conectarDB();
        
        //$sql="SELECT * FROM `usuarios` WHERE `username`='$user' and `password`= '$pass'";
        $sql="SELECT * FROM usuarios WHERE username ='$user' and password = '$pass'";

       //$result = mysqli_query($conex, $sql);
        if(!$result = mysqli_query($conex, $sql)) die();
        
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
       
       
     }else{
   
        /*  <link rel="stylesheet" type="text/css" href="./../css/estilo.css?v=<?php echo(rand()); ?>">
             <h2 class="bad">NO ESTAS REGISTRADO o ERROR EN LOS DATOS INGRESADOS.</h2>*/
            echo "ERROR";
       
    }        
        if($row !=null)
        {
            
            session_start();

            $_SESSION['username']=$user;
            $_SESSION['rol']=$row['rol_id'];
            $_SESSION['idUser']=$row['id'];
            
        
            switch ($row['rol_id']) 
            {
                case 1:

                    header('location: ../generales/admin.php');
                    exit;
                    break;
                case 2:
                    header('location:../generales/arbitro.php');
                    exit;
                    break;
                default:
                    header('location:../index.php');
                    break;
            }                    
        }
        else {

            //include ('./../index.php');    
        //----------------------------------------        
        ?><link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <h2 class="bad">NO ESTAS REGISTRADO o ERROR EN LOS DATOS INGRESADOS.</h2>
        <h2><a href="../index.php">volver</a></h2>
        <?php
        }
?>
