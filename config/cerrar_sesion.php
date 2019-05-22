<?php
    session_start();
    $_SESSION['isLogged'] = FALSE;
    session_destroy();
    header("Locations: /SistemaDeGestion/public/vista/login.html")
?>