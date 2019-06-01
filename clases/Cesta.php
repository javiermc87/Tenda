<?php

/**
 * Description of Cesta:        
 * Clase cesta: en esta clse guardaremos los Productos en un array. 
 * @author Ch3riF
 */
class Cesta {

    private $productos = [];

    public function __construct() {
        
    }

    public function add_producto($cod) {
        if (key_exists($cod, $this->productos)) {
            $this->productos[$cod]['unidades'] ++;
        } else {
            $this->productos[$cod]['unidades'] = 1;
            $this->productos[$cod]['productos'] = DB::obtieneProducto($cod);
        }
    }

    public static function obtener_cesta() {
        //leo variable de sesion
        if (isset($_SESSION['cesta'])) {
            $cesta = unserialize($_SESSION['cesta']);
        } else {
            $cesta = new Cesta();
        }

        return $cesta;
    }

    public function guardar_cesta() {
        //leo variable de sesion
        $_SESSION['cesta'] = serialize($this);
    }

    public function descuentaProducto($cod) {
        if ($this->productos[$cod]['unidades'] == 1) {
            unset($this->productos[$cod]);
        } else {
            $this->productos[$cod]['unidades'] --;
        }
    }

    public function vaciar_cesta() {
        
        $this->productos=[];      
    }

    function getProductos() {
        return $this->productos;
    }

}
