<?php 
    
    $target_path = "uploads/";
    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
        { 
            echo "<span style='color:green;'>El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido</span><br>";
        }else{
            echo "Ha ocurrido un error, trate de nuevo!";
        } 
?>
