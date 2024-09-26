<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form method="POST" action="index.php?action=login">
        <label>Correo Electrónico</label>
        <input type="email" name="email" required>
        <br>
        <label>Contraseña</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
    <p>¿No tienes una cuenta? <a href="index.php?action=registro">Regístrate aquí</a></p>
</body>
</html>
