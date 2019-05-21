<?php
/* Smarty version 3.1.33, created on 2019-05-21 22:53:37
  from 'c:\wamp64\www\Tienda\vista\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce4817158e770_22784808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56c5eddb92d4d4288ef37e415b9f5b4753e303c6' => 
    array (
      0 => 'c:\\wamp64\\www\\Tienda\\vista\\templates\\productos.tpl',
      1 => 1558479201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce4817158e770_22784808 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <title>Productos </title>
        <meta charset="UTF-8">
    </head>
    <body>
              <h1>Bienvenido a esta página <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</h1>
       <hr/>
       <h3>Lista de Productos</h3>
       <form action='producto.php' method='POST'>
                            <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

       </form>
       <hr />
        <form action='logoff.php' method='POST'>
       <input type='submit' name='desconectar' value='Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
' />
        </form>
    </body>
</html><?php }
}
