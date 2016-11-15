<?php 
    //conexión
		$mysqli = new mysqli("localhost","root","","bnexcl_moodle");

		$id_prueba = $_POST['id_prueba'];	
		
	//obtengo $_SERVER['PHP_SELF'] para recargar la página con "action"
		$pagina =  $_POST['pagina'];
	
		
	//Query
		$sql1="DELETE FROM mdlhj_pruebas WHERE id_prueba=$id_prueba"; 
			   
		if(mysqli_query($mysqli,$sql1))
		{ echo "";
		}else{ 
				print "<br>. Existe un error en la query name='SQL1'<br>"; 
				print "<i>Error:</i> ". mysqli_error($mysqli)." <i>Código:</i> ".mysqli_errno($mysqli) ; 
				exit(); 
			}
            
           
        
	
	header('Location: '.$pagina);
?>

