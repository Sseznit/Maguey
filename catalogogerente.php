<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
    <style>
    img
        {
            width: 40%;
            height: 150px;

        }
        
    </style>
</head>
<body>
    <?php 
    $conexion=mysqli_connect('localhost','root','12345') or die ("No se pudo establecer conexion con el servidor");
    mysqli_select_db($conexion,'Paginaweb') or die ("Error con la BD");
    $consulta="select * from Productos";
    $res=mysqli_query($conexion,$consulta);
    echo "<table border='1'>";
    //echo "Numero de resultados $acceso";
    echo "<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Precio</th>
    <th>Existencia</th>
    <th>Departamento</th>
    <th>Imagen</th>
    <th>Accion</th>";
    while ($resultado=mysqli_fetch_row($res))
    {
        echo "<form action=eliminap.php method='GET'>";
        echo "<input type='hidden' value='$resultado[0]' name='id'/>";
        echo "<tr>";
        echo "<td> $resultado[0]</td>";
        echo "<td> $resultado[1]</td>";
        echo "<td> $resultado[2]</td>";
        echo "<td> $resultado[3]</td>";
        echo "<td> $resultado[4]</td>";
        echo "<td> $resultado[5]</td>";
        echo "<td> <img src='$resultado[6]'/></td>";
        echo "<td><a href='eliminap.php?id=$resultado[0]'><input type='submit' value='Eliminar'/></a></form></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    
    
</body>
</html>