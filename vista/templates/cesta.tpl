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
            <!--guardamos el codigo del producto-->
            <input type='hidden' value='{$producto}' name='cod'>
            <input type='submit' name='quitar' value='Quitar' />
            <br/>
        </form>
            <br /> 
    {/foreach}
        <hr/>
        <!--Mostramos el precio total-->
        <strong>Importe total: </strong>{$total}€
        <hr/>
            <br/>
        <!--Boton VACIAR CESTA-->
        <form action='productos.php' method='POST'>
            <input type="submit" value='Vaciar' name="Vaciar" />
        </form>
    {/if}
</body>

</html>