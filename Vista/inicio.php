<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../Public/img/odo.jpg" />
    <link href="../Vista/css/inicio.css" rel="stylesheet" type="text/css">
    <title>Inicio de Sesión</title>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        
        <form action="../Controlador/Ctrl_Login.php" method="POST" autocomplete="off">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" autocomplete="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" autocomplete="current-password" required>
            
            <button type="submit" aria-label="Iniciar sesión">Iniciar Sesión</button>
        </form>
        
        <div class="terms">
            Al iniciar acepta nuestros <a href="#">términos y condiciones</a>.
        </div>

        <div class="register">
            <p>¿No tienes cuenta? <a href="../Vista/registro.html">Regístrate aquí</a></p>
        </div>
    </div>
</body>
</html>
