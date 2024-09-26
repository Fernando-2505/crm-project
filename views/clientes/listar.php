<!DOCTYPE html>
<html>
<head>
    <title>Listado de Clientes</title>
    <link rel="stylesheet" type="text/css" href="../views/assets/css/estilos.css">
</head>
<body>
    <div class="container">
    <h1>Clientes</h1>
    <a href="index.php?action=crear">Nuevo Cliente</a>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $cliente['nombre'] ?></td>
                <td><?= $cliente['email'] ?></td>
                <td><?= $cliente['telefono'] ?></td>
                <td>
                    <a href="index.php?action=editar&id=<?= $cliente['id'] ?>">Editar</a>
                    <a href="index.php?action=eliminar&id=<?= $cliente['id'] ?>" onclick="return confirm('¿Seguro que deseas eliminar este cliente?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
