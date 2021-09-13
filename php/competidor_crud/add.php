<?php
include '../consultas.php';

if(isset($_POST['agregar']))
{
	
	if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['genero']) && isset($_POST['categorias'])){
	
		$name=$_POST['nombre'];
		$lastname=$_POST['apellido'];
		$age=$_POST['edad'];
		$gen=$_POST['genero'];
		$categorias=$_POST['categorias'];
		
		
		$conn=conectarDB();//CONECTA A DATABASE
		$sql="SELECT `idCompetidor`, `nombre`, `apellido`, `edad`, `genero` FROM `competidores` WHERE `nombre`='$name' AND `apellido`='$lastname'";
		$sql1="INSERT INTO `competidores`(`nombre`, `apellido`, `edad`, `genero`) VALUES ('$name','$lastname',$age,'$gen')";
		$sql3="SELECT `idCompetidor` FROM `competidores` WHERE `nombre`='$name' and `apellido`='$lastname' LIMIT 1";
		
		if(!$result = mysqli_query($conn, $sql3)){
			var_dump($result);
			//echo "<script type='text/javascript'>alert('El competidor ya existe.');history.back();</script>";
		// header('location:../../generales/competidores.php');
		}
		else
		{	
			if(add_del_enBD($sql1))//CARGA CORRECTA DEL COMPEpetidor
			{ 
				// $idComp=consultaSQL($sql3);//trae el id del competidor
				if($resulta = mysqli_query($conn, $sql3))
				{ //vuelve a consulta si existe el competidor y trae el id
					$row = mysqli_fetch_array($resulta);
					///echo "LO QUE TIRA".$row['idCompetidor'];
					for ($i=0;$i<count($categorias);$i++) 
					{ 
						$sql2="INSERT INTO `comp_cat`(id_comp,`id_cat`) VALUES ($row[idCompetidor],$categorias[$i])";
						if(add_del_enBD($sql2))
						{ //carga en tabla comp_cat el id y las categorias
							echo "CARGA CORRECTA";
						}
					} 
					desconectarBD($conn);
				}
				else
				{
					desconectarBD($conn);
					echo "HUBO UN ERROR";
				}				
				
			}
			else{
				echo "NO SE PUDO CARGAR EL COMPETIDOR";
			}

		}
	}
	else{
		echo "<script type='text/javascript'>alert('Faltan datos no se pudo procesar');history.back();</script>";
	}	
}
?>