<?php
include "../php/consultas.php";

session_start();

$usuario = $_SESSION['username'];
$rol = $_SESSION['rol'];

if (!isset($usuario) || $rol != 1) {
    header('location:../index.html');
}

function elegirCompetidor($id){
    
}

?>
<?php include '../otros/menu.html';
?>

<div id="container">
    <style type="text/css">
        <?php include '../css/cuerpoAdmin.css'; ?>
    </style>
    <!-- fin menu--------------------------------->
    <h2 id="UserConected">Conectado:<?php echo ' ' . $usuario; ?></h2><br>
    <div id="titulo">
        <h2 id="titulo">EDICION COMPETIDOR</h2>
    </div>
    <form action="" method="POST">
        <select name="competidores" id="competidores">
            <?php
            $arr = consultaSQL("SELECT idCompetidor,nombre,apellido FROM competidores");
            //print_r($arr);
            foreach ($arr as $clave) {
            ?>
                <option value="<?php echo $clave['idCompetidor'] ?>"><?php echo $clave['nombre'].' '.$clave['apellido'] ?></option><br>
            <?php
            }
            ?>
        </select>        
    </form>
    <div>
        <input type="text" id="id"/>
        <input type="text" id="nombre"/>
        <input type="text" id="apellido"/>
        <input type="text" id="edad"/>
        <input type="text" id="genero"/>
    </div>

</div>

<?php include '../otros/footer.html'; ?>