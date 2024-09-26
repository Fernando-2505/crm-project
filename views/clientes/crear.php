<!DOCTYPE html>
<html lang="es">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
    <link rel="stylesheet" type="text/css" href="../views/assets/css/estilos.css">
</head>
<body>
    <h1>Nuevo Cliente</h1>
    <form method="POST" action="index.php?action=crear">
        <label>Nombre</label>
        <input type="text" name="nombre" required>
        <br>
        <label>Email</label>
        <input type="email" name="email" required>
        <br>
        <label>Teléfono</label>
        <input type="text" name="telefono" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
