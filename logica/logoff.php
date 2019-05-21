<?php
session_start();

if (isset($_POST['desconectar'])) {
    unset($_SESSION['nombre']);
    session_destroy();
  
    header('Location: http://localhost/tienda/logica/login.php');
}
?>