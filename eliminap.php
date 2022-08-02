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
    $id=$_GET ['id'];
    

        //aqui comienza la conexion a la base de datos, requiere de funcion mysqli_connect('nombre del servidor','usuario','contraseña')
        $conexion=mysqli_connect('localhost','root','12345') or die ("No se pudo establecer conexion con el servidor");
        //seleccion de base de datos mysqli_select_db(funcion,'nombredelabase')
        mysqli_select_db($conexion,'Paginaweb') or die ("Eroor con la BD");
        //consulta
        $consulta="delete from Productos where id=$id";
        //la i en mysql es de mejorar
        // mysqli_query(variable de lo que se ejecutara,variable consulta)
        mysqli_query($conexion,$consulta) or die ("Problema en la consulta");
        echo " La baja se dio con exito";
        //cierra la conexion
        echo "<a href='catalogogerente.php'>Regresar</a>";
        mysqli_close($conexion);

    
    
    
    ?>
</body>
</html>