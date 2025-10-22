<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Bootstrap</title>

    {{-- Bootstrap 5 desde CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Tu propio CSS --}}
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
</head>
<body> 
    {{-- Barra de navegación --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Contenido principal --}}
    <section class="hero text-center text-light d-flex flex-column justify-content-center align-items-center">
        <div>
            <h1 class="display-4 fw-bold">Bienvenido a mi página Laravel + Bootstrap</h1>
            <p class="lead mt-3">Este es un ejemplo simple de integración de Bootstrap con Laravel</p>
            <a href="#" class="btn btn-primary btn-lg mt-3">Empezar</a>
        </div>
    </section>

    {{-- Sección inferior --}}
    <section class="container py-5">
        <h2 class="text-center mb-4">Características</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm p-3 mb-4">
                    <h5 class="card-title">🚀 Rápido</h5>
                    <p class="card-text">Usa Laravel y Bootstrap para crear páginas rápidamente.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm p-3 mb-4">
                    <h5 class="card-title">🎨 Bonito</h5>
                    <p class="card-text">Bootstrap ofrece un diseño limpio y moderno sin esfuerzo.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm p-3 mb-4">
                    <h5 class="card-title">🛠️ Personalizable</h5>
                    <p class="card-text">Puedes añadir tu propio CSS para modificar estilos fácilmente.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-dark text-light text-center py-3">
        <p class="mb-0">© 2025 Mi Web - Creado con Laravel & Bootstrap</p>
    </footer>

    {{-- Scripts de Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
