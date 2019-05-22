<?php
include '../../config/conexionBD.php';
    $cod = isset($_POST["codigo"]) ? trim($_POST["codigo"]) : null;
    
    $sql = "UPDATE usuario SET usu_eliminado = 'S' WHERE usu_codigo=".$cod.";";

    if($conn->query($sql)){
        echo("Se a eliminado");
    }else{
        echo("No eliminado");
    }

?>