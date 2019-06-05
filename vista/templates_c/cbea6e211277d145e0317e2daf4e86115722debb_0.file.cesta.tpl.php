<?php
/* Smarty version 3.1.33, created on 2019-06-05 21:37:05
  from 'C:\wamp64\www\Tienda\vista\templates\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf836017bcc79_80164784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbea6e211277d145e0317e2daf4e86115722debb' => 
    array (
      0 => 'C:\\wamp64\\www\\Tienda\\vista\\templates\\cesta.tpl',
      1 => 1559770617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf836017bcc79_80164784 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body>
    <?php if ((isset($_smarty_tpl->tpl_vars['productos']->value))) {?>
    <h2>Listado de cesta</h2> 
    <?php $_smarty_tpl->_assignInScope('total', 0);?> 
    <!--recorremos los productos de la cesta y vamos mostrando lo que nos interesa:  -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'unidades', false, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value => $_smarty_tpl->tpl_vars['unidades']->value) {
?>
        <form action='productos.php' method='POST'>
            <!--vamos imprimiento los productos con UNIDADES, CODIGO, PVP y PVP total:  -->
            <strong>  <?php echo $_smarty_tpl->tpl_vars['unidades']->value['unidades'];?>
</strong> unidades de: <strong><?php echo $_smarty_tpl->tpl_vars['unidades']->value['productos']->getnombrecorto();?>
</strong> precio unidad: <strong><?php echo $_smarty_tpl->tpl_vars['unidades']->value['productos']->getPVP();?>
 €</strong> TOTAL: <strong><?php echo $_smarty_tpl->tpl_vars['unidades']->value['unidades']*$_smarty_tpl->tpl_vars['unidades']->value['productos']->getPVP();?>
</strong>€ <?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['unidades']->value['unidades']*$_smarty_tpl->tpl_vars['unidades']->value['productos']->getPVP()));?>
            <!--guardamos el codigo del producto-->
            <input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
' name='cod'>
            <input type='submit' name='quitar' value='Quitar' />
            <br/>
        </form>
            <br /> 
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <hr/>
        <!--Mostramos el precio total-->
        <strong>Importe total: </strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
€
        <hr/>
            <br/>
        <!--Boton VACIAR CESTA-->
        <form action='productos.php' method='POST'>
            <input type="submit" value='Vaciar' name="Vaciar" />
        </form>
    <?php }?>
</body>

</html><?php }
}
