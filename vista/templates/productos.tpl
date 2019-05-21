<!DOCTYPE html>
{*Platilla para visualizar los productos, se invoca desde productos.php*}
<html>
    <head>
        <title>Productos </title>
        <meta charset="UTF-8">
    </head>
    <body>
       {*primero solo visualizaremos que el usuario está conectado*}
       <h1>Bienvenido a esta página {$nombre}</h1>
       <hr/>
       <h3>Lista de Productos</h3>
       <form action='producto.php' method='POST'>
        {*Mostramos el listado de los productos*}
                    {$listado}
       </form>
       <hr />
        <form action='logoff.php' method='POST'>
       <input type='submit' name='desconectar' value='Desconectar usuario {$nombre}' />
        </form>
    </body>
</html>