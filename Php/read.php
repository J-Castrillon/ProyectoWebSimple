<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/read.css">
    <title>Document</title>
</head>
<body>
    <?php

        $conexion = mysqli_connect("localhost","root","","parisaccesorios") or die("Problemas con la conexión");
        $query = mysqli_query($conexion, "select * from productos");

        echo "<center><h1>Productos almacenados</h1></center><br>";

        while($registro = mysqli_fetch_array($query)){
            echo "<main><div>".
             "Cod: ".$registro['cod']."<br>".
             "Genero: ".$registro['genero']."<br>".
             "Nombre: ".$registro['nombre']."<br>".
             "Cantidad: ".$registro['cantidad']."<br>"."</div></main>";
        }

        

        mysqli_close($conexion);
    ?>
</body>
</html>