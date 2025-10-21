<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Laravel + Bootstrap</title>

    <!-- Bootstrap desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Si quieres añadir tu propio CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center mb-4 text-primary">Ejemplo con Laravel y Bootstrap</h1>

        <div class="card shadow-lg mx-auto" style="width: 22rem;">
            <img src="https://picsum.photos/400/200" class="card-img-top" alt="Ejemplo">
            <div class="card-body text-center">
                <h5 class="card-title">¡Hola desde Laravel!</h5>
                <p class="card-text">Esta vista está renderizada por Blade y estilizada con Bootstrap.</p>
                <a href="/" class="btn btn-success">Volver al inicio</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
