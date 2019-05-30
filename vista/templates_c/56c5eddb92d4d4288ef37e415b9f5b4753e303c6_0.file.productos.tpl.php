<?php
/* Smarty version 3.1.33, created on 2019-05-30 20:44:04
  from 'c:\wamp64\www\Tienda\vista\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf040943a0f36_26301603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56c5eddb92d4d4288ef37e415b9f5b4753e303c6' => 
    array (
      0 => 'c:\\wamp64\\www\\Tienda\\vista\\templates\\productos.tpl',
      1 => 1559248821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf040943a0f36_26301603 (Smarty_Internal_Template $_smarty_tpl) {
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
      
                            <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

      
       <hr />
           
                <?php if ((isset($_smarty_tpl->tpl_vars['cesta']->value))) {?>
            <h2>Listado de cesta</h2>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cesta']->value, 'unidades', false, 'productos');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['productos']->value => $_smarty_tpl->tpl_vars['unidades']->value) {
?>
            
            <?php echo $_smarty_tpl->tpl_vars['unidades']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['productos']->value;?>

            <br />
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         <?php }?>

        <hr />
        <form action='logoff.php' method='POST'>
       <input type='submit' name='desconectar' value='Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
' />
        </form>
    </body>
</html><?php }
}
