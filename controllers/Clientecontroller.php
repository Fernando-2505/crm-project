<?php
require_once '../models/Cliente.php';

class ClienteController {
    public function listar() {
        $clientes = Cliente::obtenerTodos();
        require '../views/clientes/listar.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            Cliente::crear($nombre, $email, $telefono);
            header('Location: index.php');
        } else {
            require '../views/clientes/crear.php';
        }
    }

    public function editar($id) {
        $cliente = Cliente::obtenerPorId($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            Cliente::actualizar($id, $nombre, $email, $telefono);
            header('Location: index.php');
        } else {
            require '../views/clientes/editar.php';
        }
    }

    public function eliminar($id) {
        Cliente::eliminar($id);
        header('Location: index.php');
    }
}
?>
