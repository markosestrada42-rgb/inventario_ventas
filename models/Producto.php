<?php
class Producto {
    public $id;
    public $nombre;
    public $stock;
    public $precio;

    public function __construct($nombre, $stock, $precio) {
        if(empty($nombre)) {
            throw new Exception("El nombre no puede estar vacío");
        }
        if($stock < 0) {
            throw new Exception("El stock no puede ser negativo");
        }
        if($precio <= 0) {
            throw new Exception("El precio debe ser mayor a 0");
        }

        $this->nombre = $nombre;
        $this->stock = $stock;
        $this->precio = $precio;
    }
}

?>