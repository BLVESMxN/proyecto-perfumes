<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="Estilos/styles.css">
    <title>Contacto | Fragancias UCB</title>
</head>
<body style="background-color: #F8F5F2; font-family: 'Playfair Display', serif; font-size: 18px;">
    <header>
        <h1 style="text-align: center;">Fragancias UCB</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="Imagenes/logo.png" alt="Logo Fragancias UCB" style="width: 120px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="index.php" class="nav-link mx-3">Inicio</a></li>
                    <li class="nav-item"><a href="perfumes.php" class="nav-link mx-3">Perfumes</a></li>
                    <li class="nav-item"><a href="contacto.php" class="nav-link active mx-3">Contacto</a></li>
                    <li class="nav-item"><a href="Admin/login.php" class="nav-link mx-3">Pedidos</a></li>
                    <li class="nav-item"><a href="Usuario/InicioSesion.php" class="nav-link mx-3">Iniciar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Formulario de Contacto -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto" data-aos="fade-up">
                <h2 class="text-center mb-4">Contáctanos</h2>
                <form action="contact.php" method="POST" class="p-4 shadow rounded" style="background-color: #FFFFFF;">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea style="resize: none;" class="form-control" id="message" name="message" rows="4" placeholder="Escribe tu mensaje aquí" required></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="text-center my-5">
        <h2 class="mb-4">Nuestra ubicación:</h2>
        <div class="d-flex justify-content-center">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2365.066615652625!2d-68.11390680918339!3d-16.52242322045748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f20ee187a3103%3A0x2f2bb2b7df32a24d!2sUniversidad%20Cat%C3%B3lica%20Boliviana%20%22San%20Pablo%22!5e0!3m2!1ses-419!2sbo!4v1726110700424!5m2!1ses-419!2sbo" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade" class="shadow-lg rounded">
            </iframe>
        </div>
    </section>


    <!-- Footer -->
    <footer style="background-color: #8C7365; color: white;">
        <section class="container py-1">
            <div class="row d-flex justify-content-between align-items-center">
                <!-- Logo y descripción -->
                <div class="col-md-6 text-center text-md-left">
                    <img src="Imagenes/logo.png" alt="logo" class="img-fluid mb-3" style="width: 400px;">
                    <p class="mb-0 mt-0">Fragancias UCB de la Universidad Católica Boliviana "San Pablo"</p>
                </div>

                <!-- Contacto -->
                <div class="col-md-6 text-center text-md-right">
                    <h5 class="mb-5">Contáctanos</h5>
                    <p>
                        Av. 14 de Septiembre <br>
                        Obrajes calle #2 <br>
                        <a href="mailto:brian.zapana@ucb.edu.bo" style="color: white;">brian.zapana@ucb.edu.bo</a> <br>
                        (591)-2-2179300, Cel 75232880
                    </p>
                </div>
            </div>

            <!-- Iconos de redes sociales -->
            <div class="row mt-3 d-flex justify-content-center mt-4">
                <div class="col-auto">
                    <a href="#"><img src="Imagenes/facebook.png" alt="facebook" class="social-icon"></a>
                </div>
                <div class="col-auto">
                    <a href="#"><img src="Imagenes/instagram.png" alt="instagram" class="social-icon"></a>
                </div>
                <div class="col-auto">
                    <a href="#"><img src="Imagenes/youtube.png" alt="youtube" class="social-icon"></a>
                </div>
            </div>
        </section>

        <!-- Derechos reservados -->
        <div class="text-center py-2 mt-3" style="background-color: #2C2C2C;">
            <small>Todos los derechos reservados | Brian Joel Zapana Pariguana</small>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
