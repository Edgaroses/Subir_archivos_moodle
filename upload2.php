<?php
    $mysqli = new mysqli("localhost","root","","bnexcl_moodle");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Subir archivos al servidor</title>
        
    <style type="text/css" media="screen">
        body{font-size:1.2em;}
    </style>
            
</head>    
<body>
    <h2>Subir Archivos</h2>
    
    <form enctype='multipart/form-data' action='php_subir.php' method='post'>
        <fieldset>
            <legend> Datos </legend>
                <p>
                    Seleccione Usuario:
                    <select name="users" required style="width: 200px">
                        
                        <?php
										
                            $query = $mysqli -> query ("SELECT id, firstname, lastname FROM mdlhj_user");

                            while ($valores = mysqli_fetch_array($query)) 
                            {
                                 echo '<option value="'.$valores[id].'">'.$valores[firstname].'  '.$valores[lastname].'</option>';
                            }
                        ?>
                        
                    </select>
                    
                    <br>
                    <br>
                    <input name='uploadedfile' type='file'>
                    <input type='submit' value='Subir archivo'>
                </p>
        </fieldset>
    </form>    

</body>    
</html>