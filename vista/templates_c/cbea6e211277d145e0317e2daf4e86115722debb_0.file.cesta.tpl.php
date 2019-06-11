<?php
/* Smarty version 3.1.33, created on 2019-06-11 20:51:58
  from 'C:\wamp64\www\Tienda\vista\templates\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d00146e4a6835_00795668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbea6e211277d145e0317e2daf4e86115722debb' => 
    array (
      0 => 'C:\\wamp64\\www\\Tienda\\vista\\templates\\cesta.tpl',
      1 => 1560286306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d00146e4a6835_00795668 (Smarty_Internal_Template $_smarty_tpl) {
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
            <!--guardamos el codigo del producto y añadimos un boton de quitar producto:-->
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
        
         <!--Boton PAGAR ( PayPal )e informacion -->
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <!--Datos para pagar paypal-->
                <input name="cmd" type="hidden" value="_cart" />
                <input name="upload" type="hidden" value="1" />
                <!--Mi correo de pay pall-->
                <input name="business" type="hidden" value="zaraguaza87-facilitator@gmail.com" />

                <input name="shopping_url" type="hidden" value="http://localhost/Tienda/logica/productos.php"/>
                <input name="return" type="hidden" value="http://localhost/Tienda/logica/notify_url.php"/>
                <input name="notify_url" type="hidden" value="http://localhost/Tienda/logica/notify_url.php" />
                <input name="rm" type="hidden" value="1" />

                <input name="currency_code" type="hidden" value="EUR" />


                
                <!--pasamos el contenido de la factura y mostramos el boton ( foto de paypal) -->
            <?php $_smarty_tpl->_assignInScope('n', 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>

                    <!--vamos imprimiento los productos con UNIDADES, CODIGO, PVP y PVP total:  -->
                <input type="hidden" name="item_name_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['productos']->getnombrecorto();?>
">
                <input type="hidden" name="amount_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['productos']->getPVP();?>
">
                <input type="hidden" name="quantity_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['unidades'];?>
">
                <?php $_smarty_tpl->_assignInScope('n', $_smarty_tpl->tpl_vars['n']->value+1);?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                <!--boton de paypal -->
                <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
        </form>
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
