<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/links.css">
    <title>Document</title>
</head>
<body>
    <?php
        $cod = $_REQUEST['cod'];
        $genero = $_REQUEST['genero'];
        $nombre = $_REQUEST['nombre'];
        $cantidad = $_REQUEST['cantidad'];

        $conexion = mysqli_connect("localhost","root","","parisaccesorios") or die("Problemas con la conexión");
        $consulta = mysqli_query($conexion,"select * from productos where cod = '".$cod."'"); 
        
        if(mysqli_num_rows($consulta) == 1){
            $query = mysqli_query($conexion, "delete  from productos where cod = '".$cod."'");
            header('Location: ../Crud/delete.html');
        }else{
            
            echo "<script>alert('No hay ningún producto con ese código');</script>";
            echo "<a href='../Crud/delete.html'>volver</a>";
        }

        
        mysqli_close($conexion);
    ?>
</body>
</html>