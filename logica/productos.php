<?php

session_start();
require('Smarty.class.php');
include 'c:\wamp64\www\tienda\clases\Producto.php';
include 'c:\wamp64\www\tienda\clases\DB.php';
include 'c:\wamp64\www\tienda\clases\Cesta.php';

$smarty = new Smarty;
$smarty->template_dir = 'c:\wamp64\www\Tienda\vista\templates';
$smarty->compile_dir = 'c:\wamp64\www\Tienda\vista\templates_c';

if (isset($_SESSION['nombre'])) {
//pasamos el valor del nombre de usuario conectado a la vista
    $smarty->assign("nombre", $_SESSION['nombre']);

//llamamos al metodo ObtieneProductos ( nos devuelve un array de Producto ) 
    $lista_productos = DB::obtieneProductos();

//recorremos la lista y vamos guardando el contenido en variables para dar formato a la lista:
    foreach ($lista_productos as $objetoProducto) {
        $precio = $objetoProducto->getPVP();
        $codigo = $objetoProducto->getcodigo();
        $nombre_corto = $objetoProducto->getnombrecorto();
//damos formato y guardamos el codigo en un hidden. (un form para cada producto y boton.
        $listado .= "<form action='productos.php' method='POST'>"
                . "<input type='submit' value='añadir' name='submit'>"
                . " $nombre_corto | $precio <br>"
                . "<input type='hidden' value='$codigo' name='cod'>"
                . "</form>";
//pasamos los valores con formato a Profuctos.tpl con la variable $listado.
        $smarty->assign("listado", $listado);
    }

   
} else {//si no estas logueado correctamente volvemos a la pagina de login.( para no entrar por url) 
    header('Location: http://localhost/tienda/logica/login.php');
}

 //iniciamos la cesta
$cesta = Cesta::obtener_cesta();

//(al dar a AÑADIR) lo guardamos con el cod como indice mediante add_producto
if (isset($_POST['submit'])) {
    $cod = $_POST['cod'];
    $cesta->add_producto($cod);
   
}

$cesta->guardar_cesta();
$smarty->assign("cesta", $cesta);
$smarty->display('productos.tpl');
var_dump($cesta);
?>
