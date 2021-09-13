
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/estGeneral.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css?v=<?php echo(rand()); ?>">
    
    <title>Ingreso</title>
</head>
<body>
    
    <form action="./php/login2.php" method="POST" id="formulario_logueo">
        <input type="text" id="user" name="username" placeholder="ingrese usuario"><br/>
        <input type="password" id="pass" name="password" placeholder="ingrese contraseña"><br/>
        <input type="submit" value="ENTRAR" name="envio" id="envio">
    </form> 
    <!-- <script src="js/formulario.js" type="text/javascript"></script> -->
</body>
</html>