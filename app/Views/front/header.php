<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymFit</title>

    <!-- Agrege un css para modificar a mi gusto-->
    <link href="assets/css-mi-Estilo/style.css" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <headers>

        <!-- creo el navbar -->

        <nav class="navbar navbar-expand-lg nav-fondo">
            <div class="container-fluid">
                <!-- imagen y nombre de la marca de mi pagina -->
                <img src="assets/img/header/logo.jpg" class="rounded-4 mx-2" alt="Bootstrap" width="46" height="45">
                <h1 class="navbar-brand  text-light">GymFit</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- listado de botones -->
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item btn-hover mx-1 rounded-4">
                            <a class="nav-link active text-light" aria-current="page" href='section_principal'>Inicio</a>
                        </li>
                        <li class="nav-item btn-hover mx-1 rounded-4">
                            <a class="nav-link text-light" href='section_quienes_somos'>Quienes Somos</a>
                        </li>
                        <li class="nav-item btn-hover mx-1 rounded-4">
                            <a class="nav-link text-light" href='section_servicios'>Servicios</a>
                        </li>
                        <li class="nav-item btn-hover mx-1 rounded-4">
                            <a class="nav-link text-light" href='section_registrarme'>Registrarme</a>
                        </li>
                        <li class="nav-item btn-hover mx-1 rounded-4">
                            <a class="nav-link text-light" href='section_iniciar_sesion'>Iniciar Sesión</a>
                        </li>
                    </ul>
                    <!-- buscador -->
                    <form class="d-flex buscador mx-1" role="search">
                        <input class="form-control  me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-warning text-light" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </headers>