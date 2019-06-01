<!DOCTYPE html>
{*Platilla para visualizar los productos, se invoca desde productos.php*}
<html>
    <head>
        <title>Productos </title>
        <meta charset="UTF-8">
    </head>
    <body>
{*BIENVENIDA AL USUARIO CONECTADo*}
       <h1>Bienvenido a esta página {$nombre}</h1>
       <hr/>
       <h3>Lista de Productos</h3>
      
{*Mostramos el listado de los productos*}
                    {$listado}
      
       <hr />
           
{*MOSTRAMOS LA LISTA DE PRODUCTOS DE LA CESTA: *}
       {if (isset($productos))}           
            <h2>Lista de productos en la Cesta</h2>
            
            {foreach $productos as $producto=>$unidades}
                <form action='productos.php' method='POST'>
                    {$unidades['unidades']} unidades de:  {$producto}  a: {$unidades['productos']->getPVP()} €
                    <input type='hidden' value='{$producto}' name='cod'>
                    <input type='submit' name='quitar' value='quitar' />
                </form>                   
               <br />
            {/foreach}
        {/if}
        <hr />
        <form action='productos.php' method='POST'>
            <input type='submit' name='vaciar' value='vaciar cesta' />
        </form>
        <form action='logoff.php' method='POST'>
            <input type='submit' name='desconectar' value='Desconectar usuario {$nombre}' />
        </form>
    </body>
</html>