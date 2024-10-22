<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secundaria Ejemplo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Encabezado -->
    <header class="py-6" style="background-color: #11165A; color: #FFFFFF;">
        <div class="container-fluid d-flex align-items-center">
            <!-- Logo alineado a la izquierda -->
            <img src="client/img/imgSecu.jpg" alt="Logo Secundaria" class="img-fluid" style="width: 250px; margin-right: 20px;">
            <!-- Texto a la derecha del logo -->
            <div>
                <h1 class="display-4 mb-0" style="color: #01ACD0;">Secundaria Ejemplo</h1>
                <p class="lead mb-0" style="color: #FFFFFF;">Formando líderes del mañana</p>
            </div>
        </div>
    </header>    
    <!-- Menú de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mision">Misión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vision">Visión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeria">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de Introducción -->
    <section class="py-5 text-center bg-light">
        <div class="container">
            <h2 class="display-5">Educación para el futuro</h2>
            <p class="lead">En nuestra secundaria, nos esforzamos por ofrecer una educación de calidad, centrada en valores, responsabilidad y el desarrollo integral de nuestros estudiantes.</p>
        </div>
    </section>

    <!-- Misión y Visión -->
    <section class="container py-5">
        <div class="row">
            <div class="col-md-6" id="mision">
                <h3 class="text-primary">Nuestra Misión</h3>
                <p>Formar estudiantes comprometidos con su entorno, capaces de enfrentar los retos del futuro con responsabilidad, ética y excelencia académica.</p>
            </div>
            <div class="col-md-6" id="vision">
                <h3 class="text-primary">Nuestra Visión</h3>
                <p>Ser una institución educativa líder, reconocida por la calidad de su enseñanza y por fomentar el crecimiento integral de sus estudiantes.</p>
            </div>
        </div>
    </section>

    <!-- Galería de Imágenes -->
    <section id="galeria" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center text-primary">Galería</h2>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="imagen1.jpg" class="img-fluid rounded" alt="Imagen 1">
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="imagen2.jpg" class="img-fluid rounded" alt="Imagen 2">
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="imagen3.jpg" class="img-fluid rounded" alt="Imagen 3">
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="imagen4.jpg" class="img-fluid rounded" alt="Imagen 4">
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="imagen5.jpg" class="img-fluid rounded" alt="Imagen 5">
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="imagen6.jpg" class="img-fluid rounded" alt="Imagen 6">
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="py-5">
        <div class="container">
            <h2 class="text-center text-primary">Contacto</h2>
            <form class="mt-4">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Nombre Completo" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="col-12 mb-3">
                        <textarea class="form-control" rows="5" placeholder="Escribe tu mensaje..." required></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Pie de Página -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 Secundaria Ejemplo. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
