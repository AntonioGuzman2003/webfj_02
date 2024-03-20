<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Laravel</title>
    <style>
        /* Estilos CSS integrados */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .hero {
            background-image: url('tu-imagen.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #f39c12;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #e67e22;
        }

        .features {
            text-align: center;
            padding: 50px 20px;
        }

        .feature {
            margin-bottom: 30px;
        }

        .feature h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-fluid py-5">
        <br class="container">
            <br></br>
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">¿Quienes Somos?</h4>
                <h1 class="display-4">GAMEPLUS.PE</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Nuestra historia</h1>
                    <p>Somos un pequeño emprendimiento que comenzo con sus operaciones en 2021 ,pasamos por desafios durante la pandemia y en lugar de detenernos decidimos transformar nuestro negocio a lo digital. </p>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="/images/games.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Nuestra Vision</h1>
                    <p>Tenemos como vision,llegar a mas usuarios brindandole una buena experiencia en nuestro sitio web esperando que encuentre el producto de su elección.</p>
                </div>
            </div>
        </div>