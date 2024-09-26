<!DOCTYPE html>
<html>
<head>
    <title>Registrarse</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
</head>
<body>
    <h1>Crear Cuenta</h1>
    <form method="POST" action="index.php?action=registro">
        <label>Nombre</label>
        <input type="text" name="nombre" required>
        <br>
        <label>Correo Electrónico</label>
        <input type="email" name="email" required>
        <br>
        <label>Contraseña</label>
        <input type="password" name="password" required>
        <br>
        <label>Confirmar Contraseña</label>
        <input type="password" name="confirm_password" required>
        <br>
        <button type="submit">Registrarse</button>
    </form>
    <p>¿Ya tienes una cuenta? <a href="index.php?action=login">Inicia sesión aquí</a></p>
</body>
</html>
