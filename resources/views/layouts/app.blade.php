<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="dropdown">
        <div class="menu-header">
            <!--Boton del menu-->
            <button class="menu-button">
                <img class="menu-image" src="Images/menuIcon.png" />
            </button>
            <!--Etiqueta del menu-->
            <span class="menu-label">Universidad Politécnica de Tecámac</span>
        </div>
        <!--Opciones del menu-->
        <div class="dropdown-content">
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('pagina1') }}">Tema 1. / Tema 1.1</a>
            <a href="{{ route('pagina2') }}">Tema 1.2 / Tema 1.3</a>
            <a href="{{ route('pagina3') }}">Tema 1.4 / Tema 1.5</a>
            <a href="{{ route('pagina4') }}">Tema 2 / Tema 2.1</a>
            <a href="{{ route('pagina5') }}">Tema 2.2 / Tema 2.3 / Tema 2.4</a>
            <a href="{{ route('pagina6') }}">Conclusiones y referencias</a>
        </div>
    </div>
    @yield('content')
</body>

</html>
