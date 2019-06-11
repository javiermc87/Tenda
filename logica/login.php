<?php

session_start();
const D = DIRECTORY_SEPARATOR;
require_once '..' . D . 'clases' . D . 'DB.php';

require('Smarty.class.php');
//var_dump($_SESSION['nombre']);
$smarty = new Smarty;
$smarty->template_dir = '..\vista\templates';
$smarty->compile_dir = '..\vista\templates_c';

//asignamos los valores para personalizar plantilla, para sustituir las variables de la misma
if (isset($_POST['enviar'])) {
    $nombre = $_POST['usuario'];
    $pass = $_POST['password'];
    if (DB::verificaCliente($nombre, $pass)) {
        //si es correcto guardamos el nombre en una variable de sesion
        $_SESSION['nombre'] = $nombre;
        header('Location: http://localhost/tienda/logica/productos.php');
    } else {
        $smarty->assign('error', 'Nombre o contraseña incorrectos**');
    }
}

$smarty->display('login.tpl');
?>
