<?php
require_once '../config/config.php';

class Cliente {
    public static function obtenerTodos() {
        global $pdo;
        $stmt = $pdo->query('SELECT * FROM clientes');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function obtenerPorId($id) {
        global $pdo;
        $stmt = $pdo->prepare('SELECT * FROM clientes WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function crear($nombre, $email, $telefono) {
        global $pdo;
        $stmt = $pdo->prepare('INSERT INTO clientes (nombre, email, telefono) VALUES (:nombre, :email, :telefono)');
        $stmt->execute(['nombre' => $nombre, 'email' => $email, 'telefono' => $telefono]);
    }

    public static function actualizar($id, $nombre, $email, $telefono) {
        global $pdo;
        $stmt = $pdo->prepare('UPDATE clientes SET nombre = :nombre, email = :email, telefono = :telefono WHERE id = :id');
        $stmt->execute(['id' => $id, 'nombre' => $nombre, 'email' => $email, 'telefono' => $telefono]);
    }

    public static function eliminar($id) {
        global $pdo;
        $stmt = $pdo->prepare('DELETE FROM clientes WHERE id = :id');
        $stmt->execute(['id' => $id]);
    }
}
?>
