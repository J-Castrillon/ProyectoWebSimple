<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $cod = $_REQUEST['cod'];
        $genero = $_REQUEST['genero'];
        $nombre = $_REQUEST['nombre'];
        $cantidad = $_REQUEST['cantidad'];

        $conexion = mysqli_connect("localhost","root","","parisaccesorios") or die("Problemas con la conexión");
        $query = mysqli_query($conexion, "insert into productos(cod,genero,nombre,cantidad) values
        ('".$cod."','".$genero."','".$nombre."','".$cantidad."')");

        header('location: ../Crud/create.html');

        mysqli_close($conexion);
    ?>
</body>
</html>