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
    
    <section class="hero">
        <h1>Lab01-Antonio</h1>
        <p>Tu mensaje de bienvenida aquí.</p>
        <a href="#" class="btn">Más información</a>
    </section>

    <section class="features">
        <h2>Características principales</h2>
        <div class="feature">
            <h3>Característica 1</h3>
            <p>Descripción de la característica 1.</p>
        </div>
        <div class="feature">
            <h3>Característica 2</h3>
            <p>Descripción de la característica 2.</p>
        </div>
        <div class="feature">
            <h3>Característica 3</h3>
            <p>Descripción de la característica 3.</p>
        </div>
    </section>

</body>
</html>
