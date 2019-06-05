<?php
/* Smarty version 3.1.33, created on 2019-06-05 21:38:29
  from 'C:\wamp64\www\Tienda\vista\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf8365551cde3_02285376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '840bdbacddeeaad8d98d4c3090803548e2179a32' => 
    array (
      0 => 'C:\\wamp64\\www\\Tienda\\vista\\templates\\productos.tpl',
      1 => 1559770702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cesta.tpl' => 1,
  ),
),false)) {
function content_5cf8365551cde3_02285376 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--Platilla para visualizar los productos, se invoca desde productos.php-->
<html>

<head>
    <title>Productos </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <div>
        <!--BIENVENIDA AL USUARIO CONECTADo-->
        <h1>Bienvenido a esta página <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</h1>
        <hr/>
        <div class="lista">
            <h2>Lista de Productos</h2> 
            <!--Mostramos el listado de los productos-->
                <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

            <br/>
            <br/>
            <!--Boton desconectar-->
            <form action='logoff.php' method='POST'>
                <input type='submit' name='desconectar' value='Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
' />
            </form>

        </div>
        <!-- aqui nos muestra el codigo de cesta.tpl -->
        <div class="cesta">
            <?php $_smarty_tpl->_subTemplateRender('file:cesta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

    </div>
</body>

</html><?php }
}
