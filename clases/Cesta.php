<?php

/**
 * Description of Cesta:        
 * Clase cesta: en esta clse guardaremos los Productos en un array. 
 * @author Ch3riF
 */
class Cesta {

    //guardamos un array con todo lo necesario para trabajar con los productos:
    // el indice es el CODIGO luego tiene UNIDADES ( veces qeu clikamos ) y los productos. 
    private $productos = [];

    public function __construct() {
        
    }

// metodo publico que añade un producto al arraty
    public function add_producto($cod) {
        if (key_exists($cod, $this->productos)) {
            $this->productos[$cod]['unidades'] ++;
        } else {
            $this->productos[$cod]['unidades'] = 1;
            $this->productos[$cod]['productos'] = DB::obtieneProducto($cod);
        }
    }

//metodo publico que nos crea la cesta o nos carga la que ya tenemos en la sesion
    public static function obtener_cesta() {
        //leo variable de sesion
        if (isset($_SESSION['cesta'])) {
            $cesta = unserialize($_SESSION['cesta']);
        } else {
            $cesta = new Cesta();
        }

        return $cesta;
    }

// guardamos la sesion en la variable de sesion 
    public function guardar_cesta() {
        //leo variable de sesion
        $_SESSION['cesta'] = serialize($this);
    }

// quita un producto del array productos
    public function descuentaProducto($cod) {
        if ($this->productos[$cod]['unidades'] == 1) {
            unset($this->productos[$cod]);
        } else {
            $this->productos[$cod]['unidades'] --;
        }
    }

//nos limpia la cesta. limpiamos el array de productos[]
    public function vaciar_cesta() {

        $this->productos = [];
    }

    function getProductos() {
        return $this->productos;
    }

}
