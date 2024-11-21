<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #7310cf;
            padding: 15px;
            text-align: center;
        }
        nav {
            margin: 10px 0;
        }
        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .productos {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
        }
        .producto {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            text-align: center;
            transition: transform 0.2s;
            width: 200px; 
        }
        .producto:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        img {
            max-width: 100%;
            height: auto;
            cursor: pointer; 
        }
    </style>
</head>
<body>

<header>
    <h1>DIZFRACES Y MASCARAS</h1>
    <nav>
        <a href="sucursales.html">Sucursales</a>
    </nav>
</header>

<main>
    <h2>Productos Destacados</h2>
    <div class="productos">
        <div class="producto">
            <a href="enviar.php">
                <img src="cr7.jpg" alt="Bomba de Aire">
            </a>
            <h3>mascara de cr7 "realista"</h3>
        </div>
        <div class="producto">
            <a href="enviar.php">
                <img src="descarga (2).jpg" alt="Bote de Espuma">
            </a>
            <h3>dizfraces de aguacates</h3>
        </div>
        <div class="producto">
            <a href="enviar.php">
                <img src="d2.jpg" alt="Emoticones">
            </a>
            <h3>peniweys</h3>
        </div>
        <div class="producto">
            <a href="enviar.php">
                <img src="d3.jpg" alt="Antorchas">
            </a>
            <h3>el señor de la noche</h3>
        </div>
        <div class="producto">
            <a href="enviar.php">
                <img src="descarga.jpg" alt="Serpentina">
            </a>
            <h3>omero y march</h3>
        </div>
        <div class="producto">
            <a href="enviar.php">
                <img src="descarga.webp" alt="Globos">
            </a>
            <h3>rana epica</h3>
        </div>
        <div class="producto">
            <a href=" enviar.php">
                <img src="descarga (1).jpg" alt="Piñata">
            </a>
            <h3>spider man</h3>
        </div>
        <div class="producto">
            <a href="enviar.php">
                <img src="am.jpg" alt="Luces">
            </a>
            <h3>mascara de presidente "realista"</h3>
        </div>
        <div class="producto">
            <a href="enviar.php">
                <img src="descarga (3).jpg" alt="Mesa de Fiesta">
            </a>
            <h3>las chicas mega super piderosas</h3>
        </div>
        <div class="producto">
            <a href="enviar.php">
                <img src="descarga (4).jpg" alt="Sillas de Fiesta">
            </a>
            <h3>mosca y caca disfraz</h3>
        </div>
        <div class="producto">
            <a href="enviar.php">
                <img src="descarga (5).jpg" alt="Servilletas">
    </a>
    <h3>recibo de CFE</h3>
        </div>
    </div>
</main>

<footer>
    <p>&copy; 2024 Animación de Fiestas. Todos los derechos reservados.</p>
</footer>

</body>
</html>