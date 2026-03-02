<?php
class Database {
    private static $host = "localhost";
    private static $user = "root";   // usuario por defecto en XAMPP
    private static $pass = "";       // contraseña vacía en XAMPP
    private static $db = "inventario_ventas"; // nombre base de datos

    public static function getConnection() {
        $conn = new mysqli(self::$host, self::$user, self::$pass, self::$db);
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>