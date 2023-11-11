<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Productos</title>
</head>
<body>
    <div id="app">
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Mi tiendita .</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Carrito</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @include('sweetalert::alert')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; 2023 Tu Tienda en Línea</p>
        </div>
    </footer>

</body>
</html>
