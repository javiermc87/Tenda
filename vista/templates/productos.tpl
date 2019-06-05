<!DOCTYPE html>
<!--Platilla para visualizar los productos, se invoca desde productos.php-->
<html>

<head>
    <title>Productos </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <div>
        <!--BIENVENIDA AL USUARIO CONECTADo-->
        <h1>Bienvenido a esta página {$nombre}</h1>
        <hr/>
        <div class="lista">
            <h2>Lista de Productos</h2> 
            <!--Mostramos el listado de los productos-->
                {$listado}
            <br/>
            <br/>
            <!--Boton desconectar-->
            <form action='logoff.php' method='POST'>
                <input type='submit' name='desconectar' value='Desconectar usuario {$nombre}' />
            </form>

        </div>
        <!-- aqui nos muestra el codigo de cesta.tpl -->
        <div class="cesta">
            {include file='cesta.tpl'}
        </div>

    </div>
</body>

</html>