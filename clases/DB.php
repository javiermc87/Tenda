<?php

//esta clase contiene todos los metodos necesarios para trabajar con nuestra base de datos:

class DB {

//variable que guarda la conexion (PDO) para con la base de datos 
    private static $conexion;

//metodo para conectarse a nuestra base de datos. 
//se conecta y guarda esta conexion en la variable Private $conexion.
    private static function conectar() {
        try {
            $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $dsn = "mysql:host=localhost;dbname=dwes";
            $usuario = 'root';
            $pass = '';
            $conexion = new PDO($dsn, $usuario, $pass, $opc);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die('Abortamos la aplicación por fallo al conectar con la BD' . $ex->getMessage());
        }
        self::$conexion = $conexion;
    }

//metodo para ejecutar consultas con la base de datos. 
//este metodo llama al metodo privado conectar para establecer la conexion primero.( siempre y cuando la $conexion sea null.
    protected static function ejecutaConsulta($sql, $valores = null) {
        if (self::$conexion == null) {
            self::conectar();
        }
        $conexion = self::$conexion;
        try {
            $consulta = $conexion->prepare($sql);
            $consulta->execute($valores);
        } catch (PDOException $e) {
            echo 'No se ha podido ejecutar la consulta' . $e->getMessage();
            return null;
        }
        return $consulta;
    }

//este metodo nos devuelve true o false el loguin es correcto o no.
    public static function verificaCliente($nombre, $pass) {
        $valores = array('usuario' => $nombre, 'password' => $pass);
        $sql = <<<FIN
        SELECT nombre FROM usuarios 
        WHERE nombre=:usuario
        AND pass=md5(:password)
FIN;
        $resultado = self::ejecutaConsulta($sql, $valores);

        if ($resultado->fetch()) {

            return true;
        }
        return false;
    }

//este metodo nos devuelve un array con objetos de cada producto. 
    public static function obtieneProductos() {
        $sql = "SELECT cod, nombre_corto, nombre, PVP FROM producto;";
        $resultado = self::ejecutaConsulta($sql);
        $productos = array();

        if ($resultado) {
            // Añadimos un elemento por cada producto obtenido
            while ($row = $resultado->fetch()) {
                $productos[] = new Producto($row);
            }
        }
        return $productos;
    }

// nos devuelve un Producto pasando como parametro un codigo:  
    public static function obtieneProducto($codigo) {

        $valores = array('cod' => $codigo);
        $sql = <<<FIN
        SELECT cod, nombre_corto, nombre, PVP
        FROM producto 
        WHERE cod = :cod
FIN;
        $resultado = self::ejecutaConsulta($sql, $valores);
        $producto = null;
        if (isset($resultado)) {
            $row = $resultado->fetch();
            $producto = new Producto($row);
        }
        return $producto;
    }

}

?>
