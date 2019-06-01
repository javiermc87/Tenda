<?php
/* Smarty version 3.1.33, created on 2019-06-01 14:47:23
  from 'c:\wamp64\www\Tienda\vista\templates\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf28ffb83a104_92243539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47bf9463ce4cc9cea08148fc5f11ed32ea1e6695' => 
    array (
      0 => 'c:\\wamp64\\www\\Tienda\\vista\\templates\\cesta.tpl',
      1 => 1559400435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf28ffb83a104_92243539 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Login Tienda Web con Plantillas</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>
<body>
   <?php if ((isset($_smarty_tpl->tpl_vars['productos']->value))) {?>
        <h2>Listado de cesta</h2>
        <?php $_smarty_tpl->_assignInScope('total', 0);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'unidades', false, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value => $_smarty_tpl->tpl_vars['unidades']->value) {
?>
  <form action='productos.php' method='POST'>
     <?php echo $_smarty_tpl->tpl_vars['unidades']->value['unidades'];?>
 unidades del producto <?php echo $_smarty_tpl->tpl_vars['unidades']->value['productos']->getnombrecorto();?>
 a <?php echo $_smarty_tpl->tpl_vars['unidades']->value['productos']->getPVP();?>
€/u TOTAL: <?php echo $_smarty_tpl->tpl_vars['unidades']->value['unidades']*$_smarty_tpl->tpl_vars['unidades']->value['productos']->getPVP();?>
€
        <?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['unidades']->value['unidades']*$_smarty_tpl->tpl_vars['unidades']->value['productos']->getPVP()));?>
        <input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
' name='cod'>
        <input type='submit' name='quitar' value='Descontar'/><br/>
        </form>

    <br />
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <strong>Importe total:</strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
€
    <form action='productos.php' method='POST'>
    <input type="submit" value='Vaciar' name="Vaciar"/>
    </form>
<?php }?>
</body>
</html><?php }
}
