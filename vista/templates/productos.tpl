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
           {include file='cesta.tpl'}
        <form action='logoff.php' method='POST'>
            <input type='submit' name='desconectar' value='Desconectar usuario {$nombre}' />
        </form>
    </body>
</html>