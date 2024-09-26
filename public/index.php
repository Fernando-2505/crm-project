<?php
require_once '../controllers/Clientecontroller.php';

$controller = new ClienteController();

$action = $_GET['action'] ?? 'listar';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'crear':
        $controller->crear();
        break;
    case 'editar':
        $controller->editar($id);
        break;
    case 'eliminar':
        $controller->eliminar($id);
        break;
    default:
        $controller->listar();
        break;
}
?>
