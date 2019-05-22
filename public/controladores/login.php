<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==FALSE){
        echo "<script>alert('No ingresar');</script>";
        header("Location: /SistemaDeGestion/public/vista/login.html");
    }

?>
<!DOCTYPE html>
</html>
<head>
    <meta charset="">
    <title> </title>
</head>
<body>
    <table style="width:100%">
    <tr>
        <th>