<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corplisac - Energía</title>
    <link rel="icon" href="img/corpli.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="estilos.css">
    <?php include_once "conection.php"; ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2E3MEKR19Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-2E3MEKR19Q');
    </script>
</head>

<body>
    <header>
        <section>
            <nav class="navbar navbar-expand-lg navbar-light bg custom-navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="img/corplisac.png" alt="Logo de tu empresa">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#nosotros">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pdf/corplisac.pdf">Catalogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contacto">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="marcas.php">Marcas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="clientes.php">Clientes</a>
                            </li>
                            <li class="nav-item d-lg-none">
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>

        <section class="slider" id="inicio" style="margin-top: 50px;">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/energia1.jpg" alt="Slide 1">
                        <div class="slide-content">
                            <h2>Bienvenidos a Corporación Logística Integral</h2>
                            <p>Somos una empresa dedicada a la energía industrial. Nuestro objetivo es proporcionar
                                soluciones energéticas sostenibles y eficientes a nuestros clientes.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/energia2.jpg" alt="Slide 2">
                        <div class="slide-content">
                            <h2>Comprometidos con la Eficiencia Energética</h2>
                            <p>Nos enfocamos en desarrollar soluciones energéticas innovadoras y sostenibles para
                                nuestros clientes, contribuyendo así al cuidado del medio ambiente.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/energia3.jpg" alt="Slide 3">
                        <div class="slide-content">
                            <h2>Nuestra Perspectiva</h2>
                            <p>Nuestro enfoque centrado en el cliente nos permite brindar soluciones energéticas
                                adaptadas a sus necesidades específicas.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </header>

    <section class="nosotros" id="nosotros">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Nosotros</h2>
                    <p>Somos una empresa dedicada a la energía industrial con más de 10 años de experiencia en el
                        mercado. Nuestro objetivo es brindar soluciones energéticas eficientes y sostenibles a nuestros
                        clientes.</p>
                </div>
                <div class="col-md-6">
                    <img src="img/nosotros1.jpg" alt="Imagen de nosotros">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <h3>Misión</h3>
                    <p>Ser una empresa líder en el sector reconocida por su compromiso, calidad en el servicio y procesos de innovación que generen valor a nuestros clientes</p>
                </div>
                <div class="col-md-6">
                    <h3>Visión</h3>
                    <p>Ofrecer a nuestros clientes soluciones brindándoles alternativas de calidad que contribuyan a la mejora del servicio en el sector industrial y energético, manteniendo un enfoque en la mejora continua de nuestros colaboradores para el logro de objetivos.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <h3>Valores</h3>
                    <ul>
                        <li><i class="fas fa-check"></i>
                            Integridad</li>
                        <li><i class="fas fa-check"></i>
                            Excelencia</li>
                        <li><i class="fas fa-check"></i>
                            Diversidad e Inclusíon</li>
                        <li><i class="fas fa-check"></i>
                            Responsabilidad social</li>
                        <li><i class="fas fa-check"></i>
                            Compromiso con el cliente</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="img/nosotros2.jpg" alt="Imagen de valores">
                </div>
            </div>
        </div>
    </section>

    <section class="contacto" id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card shadow">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">Contacto</h2>
                            <form action="enviar_correo.php" method="POST">
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Escribe tu correo electrónico" required>
                                </div>
                                <div class="form-group">
                                    <label for="mensaje">Mensaje:</label>
                                    <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="alerta" class="alert d-none"></div>

    <script>
        const alerta = document.getElementById('alerta');
        const form = document.querySelector('form');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(form);
            const response = await fetch('enviar_correo.php', {
                method: 'POST',
                body: formData,
            });

            if (response.ok) {
                alerta.classList.remove('alert-danger');
                alerta.classList.add('alert-success');
                alerta.textContent = 'Correo enviado';
                // Limpiar los campos del formulario
                form.nombre.value = '';
                form.correo.value = '';
                form.mensaje.value = '';
            } else {
                alerta.classList.remove('alert-success');
                alerta.classList.add('alert-danger');
                alerta.textContent = 'Error al enviar el correo';
            }
            alerta.classList.remove('d-none');
            setTimeout(() => {
                alerta.classList.add('d-none');
            }, 5000);
        });
    </script>

    <section class="sostenibilidad">
        <a class="enlace-sostenibilidad" href="pdf/sostenibilidad.pdf">
            Reporte de Sostenibilidad 2022
        </a>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> Dirección: Calle Huandoy No. 655 - Urb. Maranga, 5ta Etapa, San Miguel Lima-Perú</p>
                        <p><i class="fas fa-envelope"></i> Email: logistica1@corplisac.com.pe / corplisacventas@corplisac.com.pe</p>
                        <p><i class="fas fa-phone"></i> Teléfono: +51 981 332 404 / +51 946 022 785</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-logo">
                        <img src="img/logo_corplisac.png" alt="Corporación Logística Integral Logo">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-nav">
                        <h4>Indice :</h4>
                        <ul>
                            <li><a href="#inicio">Inicio</a></li>
                            <li><a href="#nosotros">Nosotros</a></li>
                            <li><a href="pdf/corplisac.pdf">Catálogo</a></li>
                            <li><a href="#contacto">Contacto</a></li>
                            <li><a href="marcas.php">Marcas</a></li>
                            <li><a href="clientes.php">Clientes</a></li>
                            <li><a href="pdf/sostenibilidad.pdf">Reporte de Sostenibilidad</a>
                            <li>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright">Derechos de autor © 2023 Corporación Logística Integral. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>