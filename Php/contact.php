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

        $nombre = $_REQUEST['nombre'];
        $email = $_REQUEST['email'];
        $numero = $_REQUEST['numero'];

        $conexion = mysqli_connect("localhost","root","","parisaccesorios") or die("Problemas con la conexión");
        $query = mysqli_query($conexion,"insert into contactenos(nombre,email,numero) values('".$nombre."','".$email."','".$numero."')");

        header('Location: ../Pages/Contacto.html');

        mysqli_close($conexion);
    ?>
</body>
</html>