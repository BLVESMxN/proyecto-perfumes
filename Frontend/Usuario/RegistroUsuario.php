<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario - Fragancias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Estilos/RegistroUsuario.css">
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-box fade-in">
            <h2>Fragancias</h2>
            <h5 class="text-center mb-4">REGISTRO DE USUARIO</h5>
            <form>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo electrónico:</label>
                    <input type="email" class="form-control" id="correo" placeholder="Tu correo electrónico">
                </div>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario:</label>
                    <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña">
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Repita Contraseña:</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Repita Contraseña">
                </div>
                <button type="submit" class="btn btn-login">Registrarse</button>
                <div class="login-links">
                    <a href="../Usuario/InicioSesion.php">Volver atrás</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
