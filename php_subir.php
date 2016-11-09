<?php 
    //conexión
    $mysqli = new mysqli("localhost","root","","bnexcl_moodle");
    
    //Obtengo valores del formulario 
    $userid=$_POST['users'];
    
    //Ruta destino del archivo
    $target_path = "uploads/";
    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
   
    
    

    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
        { 
            echo "<span style='color:green;'>El archivo ". basename
                ( $_FILES['uploadedfile']['name']). " ha sido subido</span><br>";
            $nombre = ($_FILES['uploadedfile']['name']);
            
            
            //Query
            $sql1="INSERT INTO mdlhj_pruebas (id_usuario, path_prueba, nombre_prueba)
            VALUES (" .$userid. ", '" .$target_path. "', '" .$nombre. "');"; 
            
       
        
        
            if(mysqli_query($mysqli,$sql1))
            { 
                print ""; 
            }else{ 
                    print "<br>. Existe un error en la query name='SQL1'<br>"; 
                    print "<i>Error:</i> ". mysqli_error($mysqli)." <i>Código:</i> ".mysqli_errno($mysqli) ; 
                    exit(); 
                }
            

           
        }else{
            echo "Ha ocurrido un error, trate de nuevo!";            
        } 

    
    
?>
