<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Usuario - Fragancias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Estilos/InicioSesion.css">
    
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-box fade-in">
            <h2>Fragancias</h2>
            <h5 class="text-center mb-4">USUARIO</h5>
            <form>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo electrónico:</label>
                    <input type="email" class="form-control" id="correo" placeholder="Tu Correo electrónico">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="password" placeholder="Tu Contraseña">
                </div>
                <button type="submit" class="btn btn-login">Iniciar Sesión</button>
                <div class="login-links">
                    <a href="../index.php">Volver al Inicio</a>
                    <a href="../Admin/login.php">Admin?</a>
                </div>
                <a href="RegistroUsuario.php" class="d-block text-center mt-3">No tengo cuenta</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
