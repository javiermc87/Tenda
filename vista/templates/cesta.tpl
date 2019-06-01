<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Login Tienda Web con Plantillas</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>
<body>
   {if (isset($productos))}
        <h2>Listado de cesta</h2>
        {$total=0}
    {foreach $productos as $producto=>$unidades}
  <form action='productos.php' method='POST'>
     {$unidades['unidades']} unidades del producto {$unidades['productos']->getnombrecorto()} a {$unidades['productos']->getPVP()}€/u TOTAL: {$unidades['unidades']*$unidades['productos']->getPVP()}€
        {$total=$total+($unidades['unidades']*$unidades['productos']->getPVP())}
        <input type='hidden' value='{$producto}' name='cod'>
        <input type='submit' name='quitar' value='Descontar'/><br/>
        </form>

    <br />
    {/foreach}
    <strong>Importe total:</strong>{$total}€
    <form action='productos.php' method='POST'>
    <input type="submit" value='Vaciar' name="Vaciar"/>
    </form>
{/if}
</body>
</html>