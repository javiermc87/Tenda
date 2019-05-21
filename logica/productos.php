<?php

require('Smarty.class.php');

$smarty = new Smarty;
$smarty->template_dir = 'c:\wamp64\www\Tienda\vista\templates';
$smarty->compile_dir = 'c:\wamp64\www\Tienda\vista\templates_c';


$smarty->display('productos.tpl');
?>