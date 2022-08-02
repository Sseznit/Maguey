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
    if(isset($_GET['nombre']))
    {
        $nombre=$_GET['nombre'];
        echo "$nombre <br/>";
        $correo=$_GET['correo'];
        echo "$correo<br/>";
        $telefono=$_GET['telefono'];
        echo "$telefono<br/>";
        $comentario=$_GET ['comentario'];
        echo "$comentario<br/>";
        //aqui comienza la conexion a la base de datos, requiere de funcion mysqli_connect('nombre del servidor','usuario','contraseña')
        $conexion=mysqli_connect('localhost','root','12345') or die ("No se pudo establecer conexion con el servidor");
        //seleccion de base de datos mysqli_select_db(funcion,'nombredelabase')
        mysqli_select_db($conexion,'Paginaweb') or die ("Eroor con la BD");
        //consulta
        $consulta="insert into Contactanos values (NULL,'$nombre','$correo','$telefono','$comentario',current_timestamp());";
        //la i en mysql es de mejorar
        // mysqli_query(variable de lo que se ejecutara,variable consulta)
        mysqli_query($conexion,$consulta) or die ("Problema en la consulta");
        echo " Su comentario fue recibido con exito. Gracias por ayudarnos a mejorar";
        //cierra la conexion
        mysqli_close($conexion);

    }
    else
    echo "Datos no recibidos <br/>";
    echo "<a href='contactanos.html'>Regresar</a>";
    ?>
</body>
</html>