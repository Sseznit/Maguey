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
        $apellidos=$_GET['apellidos'];
        echo "$apellidos<br/>";
        $usuario=$_GET['usuario'];
        echo "$usuario<br/>";
        $password=$_GET['password'];
        echo "$password<br/>";
        $permiso=$_GET ['permiso'];
        echo "$permiso<br/>";
        //aqui comienza la conexion a la base de datos, requiere de funcion mysqli_connect('nombre del servidor','usuario','contraseña')
        $conexion=mysqli_connect('localhost','root','12345') or die ("No se pudo establecer conexion con el servidor");
        //seleccion de base de datos mysqli_select_db(funcion,'nombredelabase')
        mysqli_select_db($conexion,'Paginaweb') or die ("Eroor con la BD");
        //consulta
        $consulta="insert into Usuario values (NULL,'$nombre','$apellidos','$usuario','$password',$permiso);";
        //la i en mysql es de mejorar
        // mysqli_query(variable de lo que se ejecutara,variable consulta)
        mysqli_query($conexion,$consulta) or die ("Problema en la consulta");
        echo " Se dio de alta con exito";
        //cierra la conexion
        mysqli_close($conexion);

    }
    else
    echo "Datos no recibidos <br/>";
    echo "<a href='Usuarios.html'>Regresar</a>";
    ?>
</body>
</html>