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
<body style="background-color: #FFFFFF; font-family: 'Playfair Display', serif; font-size: 18px;">
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
                    <li class="nav-item"><a href="perfumes.php" class="nav-link active mx-3">Perfumes</a></li>
                    <li class="nav-item"><a href="contacto.php" class="nav-link mx-3">Contacto</a></li>
                    <li class="nav-item"><a href="Admin/login.php" class="nav-link mx-3">Pedidos</a></li>
                    <li class="nav-item"><a href="Usuario/InicioSesion.php" class="nav-link mx-3">Iniciar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <section>
            <h2>MONTBLANC</h2>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/montblanc1.png" alt="montblanc" class="img-fluid">
                    <div>
                        <h4>Explorer Ultra Blue</h4>
                        <h5>MONTBLANC</h5>
                        <h5>Bs 720.00</h5>
                    </div>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity1')">-</button>
                        <input type="number" class="form-control text-center" id="quantity1" value="0" min="0"
                        onblur="validateQuantity('quantity1')" onkeydown="handleEnter(event, 'quantity1')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity1')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>

                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/montblanc2.png" alt="montblanc" class="img-fluid">
                    <div>
                        <h4>Legend Red</h4>
                        <h5>MONTBLANC</h5>
                        <h5>Bs 753.50</h5>
                    </div>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity2')">-</button>
                        <input type="number" class="form-control text-center" id="quantity2" value="0" min="0"
                        onblur="validateQuantity('quantity2')" onkeydown="handleEnter(event, 'quantity2')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity2')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>

                <!-- Product 3 -->
                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/montblanc3.png" alt="montblanc" class="img-fluid">
                    <div>
                        <h4>Legend Spirit</h4>
                        <h5>MONTBLANC</h5>
                        <h5>Bs 672.00</h5>
                    </div>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity3')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity3" value="0" min="0"
                        onblur="validateQuantity('quantity3')" onkeydown="handleEnter(event, 'quantity3')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity3')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>
            
        

                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/montblanc4.png" alt="montblanc" class="img-fluid">
                    <div>
                        <h4>Legend</h4>
                        <h5>MONTBLANC</h5>
                        <h5>Bs 675.00</h5>
                    </div>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity4')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity4" value="0" min="0" 
                        onblur="validateQuantity('quantity4')" onkeydown="handleEnter(event, 'quantity4')">                        
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity4')">+</button>                      
                    </div>
                        <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>

                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/montblanc5.png" alt="montblanc" class="img-fluid">
                    <div>
                        <h4>StarWalker</h4>
                        <h5>MONTBLANC</h5>
                        <h5>Bs 749.50</h5>
                    </div>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity5')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity5" value="0" min="0" 
                        onblur="validateQuantity('quantity5')" onkeydown="handleEnter(event, 'quantity5')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity5')">+</button>
                    </div> 
                        <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>

                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/montblanc6.png" alt="montblanc" class="img-fluid">
                    <div>
                        <h4>Explorer</h4>
                        <h5>MONTBLANC</h5>
                        <h5>Bs 1027.00</h5>
                    </div>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity6')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity6" value="0" min="0" 
                        onblur="validateQuantity('quantity6')" onkeydown="handleEnter(event, 'quantity6')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity6')">+</button>
                    </div>
                        <button class="btn btn-dark mt-2">Añadir al carrito</button>                   
                </div>
            </div>

        </section>

        <section>
            
            <h2>GIORGIO ARMANI</h2>
            <div class="row">
                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/Gio1.webp" alt="gio" class="img-fluid">
                    <h4>Acqua Di Giò Eau de Toilette</h4>
                    <h5>GIORGIO ARMANI</h5>
                    <h5>Bs 911.00</h5>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity7')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity7" value="0" min="0" 
                        onblur="validateQuantity('quantity7')" onkeydown="handleEnter(event, 'quantity7')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity7')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>

                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/Gio2.webp" alt="gio" class="img-fluid">
                    <h4>Acqua Di Gio Eau de Parfum</h4>
                    <h5>GIORGIO ARMANI</h5>
                    <h5>Bs 749.50</h5>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity8')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity8" value="0" min="0" 
                        onblur="validateQuantity('quantity8')" onkeydown="handleEnter(event, 'quantity8')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity8')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>

                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/Gio3.webp" alt="gio" class="img-fluid">
                    <h4>Code Eau De Toilette</h4>
                    <h5>GIORGIO ARMANI</h5>
                    <h5>Bs 1472.00</h5>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity9')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity9" value="0" min="0" 
                        onblur="validateQuantity('quantity9')" onkeydown="handleEnter(event, 'quantity9')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity9')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>

                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/Gio4.webp" alt="gio" class="img-fluid">
                    <h4>Code Le Parfum</h4>
                    <h5>GIORGIO ARMANI</h5>
                    <h5>Bs 850.00</h5>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity10')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity10" value="0" min="0" 
                        onblur="validateQuantity('quantity10')" onkeydown="handleEnter(event, 'quantity10')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity10')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>

                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/Gio5.webp" alt="gio" class="img-fluid">
                    <h4>Armani Aqua di Gio Profondo</h4>
                    <h5>GIORGIO ARMANI</h5>
                    <h5>Bs 1404.50</h5>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity11')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity11" value="0" min="0" 
                        onblur="validateQuantity('quantity11')" onkeydown="handleEnter(event, 'quantity11')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity11')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>

                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/Gio6.webp" alt="gio" class="img-fluid">
                    <h4>Stronger With You Intensely</h4>
                    <h5>GIORGIO ARMANI</h5>
                    <h5>Bs 1246.70</h5>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity12')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity12" value="0" min="0" 
                        onblur="validateQuantity('quantity12')" onkeydown="handleEnter(event, 'quantity12')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity12')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>
            </div>
        </section>


        <section>
            <h2>LA COSTE</h2>
            <div class="row">
                    <div class="col-md-4 perfume-item mt-5">
                        <img src="Imagenes/Lacoste1.webp" alt="gio" class="img-fluid">
                        <h4>Blanc Eau De Parfum - 50 ml</h4>
                        <h5>LA COSTE</h5>
                        <h5>Bs 630.20</h5>
                        <div class="input-group mt-3">
                            <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity13')">-</button>
                            <input type="number" class="form-control text-center quantity" id="quantity13" value="0" min="0" 
                            onblur="validateQuantity('quantity13')" onkeydown="handleEnter(event, 'quantity13')">
                            <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity13')">+</button>
                        </div>
                        <button class="btn btn-dark mt-2">Añadir al carrito</button>
                    </div>

                    <div class="col-md-4 perfume-item mt-5">
                        <img src="Imagenes/Lacoste2.webp" alt="gio" class="img-fluid">
                        <h4>Blanc Eau De Toilette - 50 ml</h4>
                        <h5>LA COSTE</h5>
                        <h5>Bs 609.50</h5>
                        <div class="input-group mt-3">
                            <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity14')">-</button>
                            <input type="number" class="form-control text-center quantity" id="quantity14" value="0" min="0" 
                            onblur="validateQuantity('quantity14')" onkeydown="handleEnter(event, 'quantity14')">
                            <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity14')">+</button>
                        </div>
                        <button class="btn btn-dark mt-2">Añadir al carrito</button>
                    </div>

                    <div class="col-md-4 perfume-item mt-5">
                        <img src="Imagenes/Lacoste3.webp" alt="gio" class="img-fluid">
                        <h4>Code Eau De Toilette</h4>
                        <h5>LA COSTE</h5>
                        <h5>Bs 775.00</h5>
                        <div class="input-group mt-3">
                            <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity15')">-</button>
                            <input type="number" class="form-control text-center quantity" id="quantity15" value="0" min="0" 
                            onblur="validateQuantity('quantity15')" onkeydown="handleEnter(event, 'quantity15')">
                            <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity15')">+</button>
                        </div>
                        <button class="btn btn-dark mt-2">Añadir al carrito</button>
                    </div>
            </div>
        </section>

        <section>
            <h2>GUCCI</h2>
            <div class="row">
            
                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/Gucci1.webp" alt="gio" class="img-fluid">
                    <h4>Elixir Male EDP</h4>
                    <h5>GUCCI</h5>
                    <h5>Bs 1609.70</h5>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity16')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity16" value="0" min="0" 
                        onblur="validateQuantity('quantity16')" onkeydown="handleEnter(event, 'quantity16')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity16')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>

                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/Gucci2.webp" alt="gio" class="img-fluid">
                    <h4>Gorgeous Gardenia Jasmin EDP - 50 ml</h4>
                    <h5>GUCCI</h5>
                    <h5>Bs 1212.50</h5>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity17')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity17" value="0" min="0" 
                        onblur="validateQuantity('quantity17')" onkeydown="handleEnter(event, 'quantity17')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity17')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>

                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/Gucci3.webp" alt="gio" class="img-fluid">
                    <h4>Guilty Pour Homme</h4>
                    <h5>GUCCI</h5>
                    <h5>Bs 856.00</h5>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity18')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity18" value="0" min="0" 
                        onblur="validateQuantity('quantity18')" onkeydown="handleEnter(event, 'quantity18')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity18')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>

                <div class="col-md-4 perfume-item mt-5">
                    <img src="Imagenes/Gucci4.webp" alt="gio" class="img-fluid">
                    <h4>Bloom EDT</h4>
                    <h5>GUCCI</h5>
                    <h5>Bs 822.00</h5>
                    <div class="input-group mt-3">
                        <button class="btn btn-outline-secondary" type="button" onclick="decrement('quantity19')">-</button>
                        <input type="number" class="form-control text-center quantity" id="quantity19" value="0" min="0" 
                        onblur="validateQuantity('quantity19')" onkeydown="handleEnter(event, 'quantity19')">
                        <button class="btn btn-outline-secondary" type="button" onclick="increment('quantity19')">+</button>
                    </div>
                    <button class="btn btn-dark mt-2">Añadir al carrito</button>
                </div>
            </div>
        </section>

    </main>

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


    <!--JavaScript-->
    <script src="Estilos/botonesCarrito.js"></script>
</body>
</html>
