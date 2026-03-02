<?php
 feature/productos
require_once __DIR__ . '/../config/database.php';


 main
class Producto {
    public $id;
    public $nombre;
    public $stock;
    public $precio;

    public function __construct($nombre, $stock, $precio) {
feature/productos
        if (empty($nombre)) {
            throw new Exception("El nombre no puede estar vacío");
        }
        if ($stock < 0) {
            throw new Exception("El stock no puede ser negativo");
        }
        if ($precio <= 0) {

        if(empty($nombre)) {
            throw new Exception("El nombre no puede estar vacío");
        }
        if($stock < 0) {
            throw new Exception("El stock no puede ser negativo");
        }
        if($precio <= 0) {
 main
            throw new Exception("El precio debe ser mayor a 0");
        }

        $this->nombre = $nombre;
        $this->stock = $stock;
        $this->precio = $precio;
    }
 feature/productos

    //  Métodos CRUD con conexión a BD

    public static function getAll() {
        $conn = Database::getConnection();
        $sql = "SELECT * FROM productos";
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public static function create($nombre, $stock, $precio) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO productos (nombre, stock, precio) VALUES (?, ?, ?)");
        $stmt->bind_param("sid", $nombre, $stock, $precio);
        return $stmt->execute();
    }

    public static function update($id, $nombre, $stock, $precio) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("UPDATE productos SET nombre=?, stock=?, precio=? WHERE id=?");
        $stmt->bind_param("sidi", $nombre, $stock, $precio, $id);
        return $stmt->execute();
    }

    public static function delete($id) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("DELETE FROM productos WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

}

 main
?>