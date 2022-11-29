<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loing</title>
</head>
<body>
    <?php

        $usuario = $_REQUEST['usuario'];
        $contraseña = $_REQUEST['password']; 

        $conexion = mysqli_connect("localhost","root","","login") or die("Problemas con la conexión"); 
        $query = mysqli_query($conexion,"select * from usuario where usuario = '".$usuario."' and contraseña = '".$contraseña."'");
        
        $resultados = mysqli_num_rows($query);

        if($resultados == 1){
            header("Location: ../acceso/admin.html");
        }else{
            header("Location: ../acceso/log.html");
        }

        mysqli_close($conexion);

    ?>
</body>
</html>