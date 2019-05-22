<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==FALSE){0
        header("Location: /SistemaDeGestion/public/vista/login.html");
    }

?>