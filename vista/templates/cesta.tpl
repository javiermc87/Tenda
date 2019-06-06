<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body>
    {if (isset($productos))}
        <h2>Listado de cesta</h2> 
    {$total=0} 
    <!--recorremos los productos de la cesta y vamos mostrando lo que nos interesa:  -->
    {foreach $productos as $producto=>$unidades}
        <form action='productos.php' method='POST'>
            <!--vamos imprimiento los productos con UNIDADES, CODIGO, PVP y PVP total:  -->
            <strong>  {$unidades['unidades']}</strong> unidades de: <strong>{$unidades['productos']->getnombrecorto()}</strong> precio unidad: <strong>{$unidades['productos']->getPVP() } €</strong> TOTAL: <strong>{$unidades['unidades']*$unidades['productos']->getPVP() }</strong>€ {$total=$total+($unidades['unidades']*$unidades['productos']->getPVP())}
            <!--guardamos el codigo del producto y añadimos un boton de quitar producto:-->
            <input type='hidden' value='{$producto}' name='cod'>
            <input type='submit' name='quitar' value='Quitar' />
            <br/>
        </form>
            <br /> 
    {/foreach}
        <hr/>
        <!--Mostramos el precio total-->
        <strong>Importe total: </strong>{$total}€
        
        <!--Boton PAGAR ( PayPal )e informacion -->
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <!--Datos para pagar paypal-->
                <input name="cmd" type="hidden" value="_cart" />
                <input name="upload" type="hidden" value="1" />
                <!--Mi correo de pay pall-->
                <input name="business" type="hidden" value="Zaraguaza87-facilitator@iesandorra.es" />
                <input name="shopping_url" type="hidden" value="http://vista/templates/pago.tpl" />
                <input name="currency_code" type="hidden" value="EUR" />
                <input name="return" type="hidden" value="http://vista/templates/pago.tpl"/>
                <input name="notify_url" type="hidden" value="http://vista/templates/pago.tpl" />
                <input name="rm" type="hidden" value="2" />
                
                <!--pasamos el contenido de la factura y mostramos el boton ( foto de paypal) -->
                <tr class="pago">
                  <td class="pago"></td>
                  <td class="pago"></td>
                  <td class="pago"></td>         
                    <input type="hidden" name="item_name_total" value="total">
                    <input type="hidden" name="amount_1" value="1">
                    <input type="hidden" name="quantity_total" value="{$total}">
                </tr>
                <!--boton de paypal -->
                <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
        </form>
        <hr/>
            <br/>
        <!--Boton VACIAR CESTA-->
        <form action='productos.php' method='POST'>
            <input type="submit" value='Vaciar' name="Vaciar" />
        </form>
    {/if}
</body>

</html>