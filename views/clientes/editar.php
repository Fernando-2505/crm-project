<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
    <link rel="stylesheet" type="text/css" href="../views/assets/css/estilos.css">
</head>
<body>
    <h1>Editar Cliente</h1>
    <form method="POST" action="index.php?action=editar&id=<?= $cliente['id'] ?>">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?= $cliente['nombre'] ?>" required>
        <br>
        <label>Email</label>
        <input type="email" name="email" value="<?= $cliente['email'] ?>" required>
        <br>
        <label>Teléfono</label>
        <input type="text" name="telefono" value="<?= $cliente['telefono'] ?>" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
