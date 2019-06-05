<?php
session_start();

if (isset($_POST['desconectar'])) {
    //destruimosla variable de sesion  y la sesion, despues vamos a login
    unset($_SESSION['nombre']);
    session_destroy(); 
    header('Location: http://localhost/tienda/logica/login.php');
}
?>