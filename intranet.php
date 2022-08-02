<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
</head>
<body>
    <?php 
    $u=$_POST['usuario'];
    $p=$_POST['password'];
    $conexion=mysqli_connect('localhost','root','12345') or die ("No se pudo establecer conexion con el servidor");
    mysqli_select_db($conexion,'Paginaweb') or die ("Error con la BD");
    $consulta="select Usuario, Password, Permiso from Usuario where Usuario='$u' and Password='$p'";
    $res=mysqli_query($conexion,$consulta);
    
    //echo "Numero de resultados $acceso";
    while ($resultado=mysqli_fetch_row($res))
    {
        $permiso=$resultado[2];
        echo "Permiso $permiso";
    }
    $acceso=mysqli_num_rows($res);
    if($acceso==0)
    {
        echo "Usuario/Password incorrecto";
        echo "<a href='Intranet.html'>Regresar</a>";
    }
    else
    {
        if ($permiso==0)
        header ('Location:Menualm.html');
        if ($permiso==1)
        header ('Location:Usuarios.html');
    }

    ?>
</body>
</html>