<?php
    #session_start();
    #if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==FALSE){0
     #   header("Location: /SistemaDeGestion/public/vista/login.html");
    #}
    //include '/SistemaDeGestion/config/verificarsesion.php';

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de usuarios</title>
</head>
<body>

    <table style="width:100%" border="1">
    <tr>
    <th>Cedula</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Dirección</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Fecha Nacimiento</th>
    <th>Eliminar</th>
    <th>Modificar</th>
    <th>Cambiar contraseña</th>
    </tr>
    <a href=""></a>
    <?php
    include '../../../config/conexionBD.php';
    $sql = "SELECT * FROM usuario WHERE usu_eliminado = 'N'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo " <td>" . $row["usu_cedula"] . "</td>";
    echo " <td>" . $row['usu_nombres'] ."</td>";
    echo " <td>" . $row['usu_apellidos'] . "</td>";
    echo " <td>" . $row['usu_direccion'] . "</td>";
    echo " <td>" . $row['usu_telefono'] . "</td>";
    echo " <td>" . $row['usu_correo'] . "</td>";
    echo " <td>" . $row['usu_fecha_nacimiento'] . "</td>";
    echo '<td><a href="datosEliminar.php?codigo='.$row['usu_codigo'].'">Eliminar</a></td>';
    echo ' <td><a href="">Modificar</a></td>';
    echo ' <td><a href="">Cambiar contraseña</a></td>';
    echo "</tr>";
    }
    } else {
    echo "<tr>";
    echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
    echo "</tr>";
    }
    $conn->close();
    ?>
    </table>
</body>
</html>