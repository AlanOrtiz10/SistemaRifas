<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Micky</title>

    <!-- Importar Poppins desde Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #212121;
            color: white;
            border-top: 25px solid #4ea93b;
            border-bottom: 25px solid #4ea93b;
            padding: 0.4rem 0;
            position: relative;
            height: 180px;
        }

        .navbar {
            height: 100%;
        }



        .navbar-brand {
            position: absolute;
            top: 0;
            left: 20px;
            z-index: 1000;
            height: 180px;
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #4ea93b;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar .container {
            max-width: 1400px;
            width: 95%;
            padding-left: 220px;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .navbar-collapse {
            height: 100%;
            display: flex;
            align-items: center;
        }

        .header:before {
            content: '';
            position: absolute;
            top: -90px;
            left: 0;
            right: 0;
            height: 90px;
            background-color: #212121;
            /* Mismo color que el header */
            z-index: -1;
        }


        .navbar-brand small {
            font-size: 0.75rem;
            display: block;
            margin-top: 0.25rem;
            font-weight: 300;
        }

        .navbar-nav {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 2rem;
            /* Espacio entre elementos del menú */
        }

        .navbar-nav .nav-link {
            color: white;
            font-size: 1.1rem;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #4ea93b;
        }

        .navbar-nav .nav-item:not(:last-child) .nav-link::after {
            content: '|';
            color: white;
            padding-left: 1rem;
        }

        .logo-padding {
            padding-left: 20px;
        }

        .main-content {
            background-color: white;
        }

        .footer {
            background-color: #4ea93b;
            color: white;
        }

        .title-container {
            background-color: #212121;
            color: white;
            padding: 1rem 0;
        }

        .title-container h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .title-container p {
            font-size: 1.2rem;
            font-weight: 400;
            color: #4ea93b;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
        }

        #carouselExampleIndicators {
            border: 5px solid #4ea93b;
            max-width: 50%;
            margin: 0 auto;
        }

        .highlight-text {
            font-size: 2rem;
            font-weight: 800;
            color: #4ea93b;
            margin: 2rem 0;
            text-align: center;
        }

        .big-price {
            font-size: 3rem;
            font-weight: 900;
            color: #FF0000;
            margin-top: 1rem;
            text-align: center;
        }

        /* Nuevo estilo para la lista de boletos */
        .available-tickets {
            color: black;
            /* Color del texto */
            font-weight: 700;
            /* Peso de fuente */
            font-size: 1.6rem;
            /* Tamaño de fuente del texto */
            text-align: center;
            /* Centrar texto */
            margin: 10px 0;
            /* Margen superior e inferior */
        }

        .available-tickets .ti {
            color: #4ea93b;
            /* Color verde para los íconos */
            font-size: 2.5rem;
            /* Tamaño de los íconos */
        }

        .bold-text {
            font-weight: bold;
        }

        .semi-bold-text {
            font-weight: 600;
        }

        .title-container h3 i {
            margin: 0 0.5rem;
            /* Ajusta el margen a tu gusto */
        }

        .full-width {
            width: 100%;
            margin: 0;
            /* Para asegurar que no haya espacio alrededor */
            padding: 0 1rem;
            /* Opcional: Ajusta el padding según sea necesario */
        }

        /* Estilos CSS actualizados */
        .tickets-container {
            max-height: 500px;
            /* Altura máxima del contenedor */
            overflow-y: auto;
            /* Permite el scroll vertical */
            border: 2px solid #4ea93b;
            /* Borde opcional para el contenedor */
            border-radius: 10px;
            /* Bordes redondeados */
            padding: 20px;
            background-color: #f8f9fa;
            /* Color de fondo suave */
            margin: 0 auto;
            /* Centrar el contenedor */
            max-width: 900px;
            /* Ancho máximo del contenedor */
        }

        .ticket-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(50px, 1fr));
            /* Más boletos por fila */
            gap: 8px;
            /* Espacio entre boletos reducido */
            width: 100%;
        }

        .ticket-badge {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 35px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 0.9rem;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }


        .ticket-grid .ticket-badge:hover {
            transform: scale(1.1);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .ticket-badge:hover {
            transform: scale(1.1);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .available {
            color: black;
            border: 1px solid #4ea93b;
            background-color: white;
        }

        .sold {
            background-color: #000;
            color: white;
        }

        /* Estilo para la barra de desplazamiento */
        .tickets-container::-webkit-scrollbar {
            width: 8px;
        }

        .tickets-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .tickets-container::-webkit-scrollbar-thumb {
            background: #4ea93b;
            border-radius: 10px;
        }

        .tickets-container::-webkit-scrollbar-thumb:hover {
            background: #3d8a2f;
        }

        /* Estilos responsivos */
        @media (max-width: 768px) {
            .tickets-container {
                max-height: 400px;
                margin: 0 10px;
            }

            .ticket-grid {
                grid-template-columns: repeat(auto-fill, minmax(40px, 1fr));
                gap: 6px;
            }

            .ticket-badge {
                height: 30px;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 992px) {
            .header {
                height: auto;
                padding: 1rem 0;
            }

            .navbar-brand {
                position: relative;
                left: 0;
                height: auto;
                margin-bottom: 1rem;
            }

            .navbar .container {
                padding-left: 1rem;
                flex-direction: column;
            }

            .navbar-collapse {
                width: 100%;
            }

            .navbar-nav {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .navbar-brand img {
                width: 120px;
                height: 120px;
            }
        }

        .ticket-legend {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            font-size: 1.1rem;
            margin-bottom: 15px;
        }


        .legend-badge {
            width: 60px;
            margin-right: 5px;
            cursor: default;
        }

        .legend-badge:hover {
            transform: none !important;
            box-shadow: none !important;
        }

        .ml-3 {
            margin-left: 15px;
        }
    </style>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/img/favicon/logo.jpeg') }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Preguntas Frecuentes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Métodos de Pago</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Comprar Boletos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="main-content">
        <div class="title-container w-100 py-3">
            <h1 class="text-center mb-2">SÚPER COMBO TEKEN LINE<br>MOTO 250 DOBLE PROPÓSITO 2024<br>+ BONO SORPRESA DE
                $5,000 MXN</h1>
            <p class="text-center" style="font-size: 1.2rem; font-weight: 400; color: #4ea93b;">
                La rifa se llevará a cabo cuando se haya vendido el 80% de los boletos.
            </p>
        </div>
        <div class="available-tickets">
            <i class="ti ti-square-rounded-chevrons-down-filled"></i> LISTA DE BOLETOS DISPONIBLES ABAJO <i
                class="ti ti-square-rounded-chevrons-down-filled"></i>
        </div>

        <div class="container mt-4 mb-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/rifas/1.png') }}" class="d-block w-100" alt="Moto 1">
                    </div>
                    {{-- <div class="carousel-item">
                        <img src="{{ asset('assets/img/rifas/2.jpeg') }}" class="d-block w-100" alt="Moto 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/rifas/3.jpeg') }}" class="d-block w-100" alt="Moto 3">
                    </div> --}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

        <!-- Sección para el Costo del Boleto y Mensaje Motivador -->
        <section class="title-container py-5">
            <h2 class="text-center mb-2 bold-text" style="font-size: 2.5rem;">COSTO DEL BOLETO $100</h2>
            <p class="text-center mt-3 bold-text" style="font-size: 1.2rem;">
                Solo 1000 boletos en total, numeración del 000 al 999
            </p>

            <h3 class="text-center mb-2 bold-text" style="font-size: 2rem;">
                <i class="ti ti-square-rounded-chevrons-down-filled"></i>
                HAZ CLICK ABAJO EN TU NÚMERO DE LA SUERTE
                <i class="ti ti-square-rounded-chevrons-down-filled"></i>
            </h3>

        </section>

        <section class="container mt-4">
            <!-- Agregar esta nueva sección -->
            <div class="ticket-legend text-center mb-3">
                <span class="ticket-badge available legend-badge">000</span> - Disponibles
                <span class="ticket-badge sold legend-badge ml-3">000</span> - Vendidos
            </div>

            <div class="tickets-container">
                <div class="ticket-grid">
                    @foreach($boletos as $boleto)
                    <div class="ticket-badge {{ $boleto['estado'] === 'Disponible' ? 'available' : 'sold' }}"
                        data-ticket-number="{{ $boleto['numero_boleto'] }}">
                        {{ str_pad($boleto['numero_boleto'], 3, '0', STR_PAD_LEFT) }}
                    </div>
                    @endforeach
                </div>
            </div>
        </section>





    </main>

    <footer class="footer mt-4 pt-3">
        <div class="full-width text-center semi-bold-text" style="font-size: 1.5rem;">
            <p>PREGUNTAS AL WHATSAPP:</p>
            <p>(662) 395 1893</p>

        </div>

        <div class="full-width title-container py-3">
            <p class="text-center mt-3 bold-text" style="font-size: 1.2rem;">
                Sitio web desarrollado por Madiffy
            </p>
            <p class="text-center mt-3 bold-text" style="font-size: 1.2rem;">
                Aviso de Privacidad
            </p>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>