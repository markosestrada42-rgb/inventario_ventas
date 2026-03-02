<?php
require_once __DIR__ . '/../models/Producto.php';

class ProductoController {

    // Listar productos
    public function obtenerProductos() {
        return Producto::getAll();
    }

    // Crear producto con validaciones
    public function crearProducto($nombre, $stock, $precio) {
        if (trim($nombre) == "" || $stock < 0 || $precio <= 0) {
            throw new Exception("Validación fallida: revisa los datos.");
        }
        return Producto::create($nombre, $stock, $precio);
    }

    // Editar producto con validaciones
    public function editarProducto($id, $nombre, $stock, $precio) {
        if (trim($nombre) == "" || $stock < 0 || $precio <= 0) {
            throw new Exception("Validación fallida: revisa los datos.");
        }
        return Producto::update($id, $nombre, $stock, $precio);
    }

    // Eliminar producto
    public function eliminarProducto($id) {
        return Producto::delete($id);
    }
}
?>