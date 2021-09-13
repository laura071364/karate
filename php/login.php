<?php    
    include './database.php';
    

    if(isset($_POST['envio']))
    {

        $user =trim($_POST['username']);
        $pass =trim($_POST['password']);

            
        //--------------funciona---------------
        $query="SELECT * FROM usuarios WHERE username = '$user' AND password = '$pass'" ;
        
       
        $res= mysqli_query($conex, $query);
      
        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
       
        mysqli_close($conex);
        
        if($row !=null)
        {
            
            session_start();

            $_SESSION['username']=$user;
            $_SESSION['rol']=$row["rol_id"];
            $_SESSION['mensajes']='';
        
            switch ($row["rol_id"]) 
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
                    header('location:../generales/index.html');
                    break;
            }                    
        }
        else {

            include ('./../index.html');    
        //----------------------------------------        
        ?><link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <h2 class="bad">NO ESTAS REGISTRADO o ERROR EN LOS DATOS INGRESADOS.</h2>
        <?php
            // echo '<script language="javascript">alert("NO ESTAS REGISTRADO, O DATOS INCORRECTOS."); window.history.back();</script>';
    }
        mysqli_free_result($res);
        mysqli_close($conex);

}    

?>