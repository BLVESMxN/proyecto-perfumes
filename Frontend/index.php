<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="Estilos/styles.css">
    <title>Inicio | Fragancias UCB</title>
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
                    <li class="nav-item"><a href="index.php" class="nav-link active mx-3">Inicio</a></li>
                    <li class="nav-item"><a href="perfumes.php" class="nav-link mx-3">Perfumes</a></li>
                    <li class="nav-item"><a href="contacto.php" class="nav-link mx-3">Contacto</a></li>
                    <li class="nav-item"><a href="Admin/login.php" class="nav-link mx-3">Pedidos</a></li>
                    <li class="nav-item"><a href="Usuario/InicioSesion.php" class="nav-link mx-3">Iniciar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="carouselBanner" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Imagenes/banner1.png" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/banner2.png" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/banner3.jpg" alt="Banner 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>

    <h2 style="text-align: center; margin-bottom: 80px;">Sobre Nosotros</h2>
    
    <div class="container">
        <main>
            <div class="row mb-4">
                <div class="col-lg-6 d-flex align-items-center mission-text" data-aos="fade-up">
                    <div>
                        <h3><strong>Nuestra misión</strong></h3>
                        <p>
                            Nuestra misión es transformar cada momento cotidiano en una experiencia 
                            inolvidable a través de fragancias que inspiren, empoderen y realcen la 
                            autenticidad de nuestros clientes. Nos esforzamos por ser más que una tienda 
                            de perfumes: buscamos ser una fuente constante de inspiración y vanguardia en 
                            el mundo de las fragancias, ofreciendo productos de calidad excepcional y un 
                            servicio personalizado que exceda las expectativas.   
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center mission-img" data-aos="fade-up">
                    <img src="Imagenes/imagenVis.webp" alt="Imagen misión" class="img-fluid">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-6 d-flex justify-content-center vision-img" data-aos="fade-up">
                    <img src="Imagenes/imagenMis.webp" alt="Imagen visión" class="img-fluid">
                </div>
                <div class="col-lg-6 d-flex align-items-center vision-text" data-aos="fade-up">
                    <div>
                        <h3><strong>Nuestra visión</strong></h3>
                        <p>
                            Aspiramos a ser reconocidos como la marca líder en el mercado global 
                            de fragancias, redefiniendo los estándares de la industria con innovación 
                            constante y una pasión inquebrantable por la excelencia. Queremos expandir 
                            nuestra presencia internacionalmente y convertirnos en un referente en la 
                            creación de fragancias únicas, alcanzando cada rincón del mundo con productos 
                            que hablen de calidad, sofisticación y estilo. Nuestra visión es dejar una 
                            huella perdurable en la vida de cada persona, haciendo de Fragancias UCB un 
                            sinónimo de distinción y lujo accesible.
                        </p>
                    </div>
                </div>
            </div>

            <h3 style="text-align: center; margin-top: 100px;font-weight: bold;">Nuestra Historia</h3>
            <div class="row">
                <div class="col-12">
                    <p>
                        Fragancias UCB nació del deseo de ofrecer a Bolivia una experiencia única en el mundo de los perfumes. 
                        Fundada el 25 de marzo de 2004 en La Paz, la empresa fue creada con la visión de brindar fragancias de 
                        alta calidad que reflejaran el espíritu y la autenticidad de su gente. Desde sus inicios, Fragancias UCB 
                        ha mantenido un compromiso con la excelencia y la innovación, trayendo las últimas tendencias del mundo de 
                        las fragancias y adaptándolas a los gustos locales.
                        Con el tiempo, la empresa ha ganado una sólida reputación y se ha posicionado como un líder en el mercado, 
                        destacándose por la calidad de sus productos y la constante búsqueda de novedades. A lo largo de los años, 
                        Fragancias UCB ha crecido y evolucionado, pero siempre ha mantenido su esencia: ofrecer fragancias que no 
                        solo sean un accesorio, sino una extensión de la personalidad y el estilo de vida de cada cliente.
                    </p>
                    <img src="Imagenes/NuestraHistoria.jpeg" alt="Nuestra Historia" class="img-fluid mx-auto d-block" style="width: 800px;">
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
   
    <script>
        AOS.init();
    </script>

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
</body>
</html>
