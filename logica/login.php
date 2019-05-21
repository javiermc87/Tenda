<?php
session_start();
include 'c:\wamp64\www\tienda\clases\DB.php';
require('Smarty.class.php');
var_dump($_SESSION['nombre']);
$smarty = new Smarty;
$smarty->template_dir = 'c:\wamp64\www\tienda\vista\templates';
$smarty->compile_dir = 'c:\wamp64\www\tienda\vista\templates_c';

//asignamos los valores para personalizar plantilla, para sustituir las variables de la misma
if (isset($_POST['enviar'])) {
    $nombre = $_POST['usuario'];
    $pass = $_POST['password'];
    if (DB::verificaCliente($nombre, $pass)) {
        //si es correcto guardamos el nombre en una variable de sesion
        $_SESSION['nombre']=$nombre;
        header('Location: http://localhost/tienda/logica/productos.php');
    } else {
        $smarty->assign('error', 'Introduce nombre y contraseña de nuevo');
    }
}

$smarty->display('login.tpl');
?>
