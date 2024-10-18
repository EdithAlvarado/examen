<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sección 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #35424a;
            color: white;
            padding: 10px 0;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul.left {
            display: flex;
        }
        nav ul.right {
            display: flex;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: #e94e77;
        }
        .info-section {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #FF6347;
        }
        h2 {
            margin-top: 20px;
        }
        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul class="left">
                <li><a href="#">Alumno: Alvarado Gutierrez Edith Alejandra</a></li>
            </ul>
            <ul class="right">
                <li><a href="seccion1.php" class="btn-seccion">Sección 1</a></li>
                <li><a href="seccion2.php" class="btn-seccion">Sección 2</a></li>
                <li><a href="seccion3.php" class="btn-seccion">Sección 3</a></li>
                <li><a class="btn-inicio" href="index.html">Inicio</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="info-section">
            <div class="info-text">
                <h1>Principios de seguridad de la información</h1>

                <h2 style="color: #1E90FF;">Accesibilidad</h2>
                <p>Es la capacidad de los usuarios autorizados para acceder a la información y los sistemas cuando lo necesiten. Garantiza que los recursos estén disponibles de manera oportuna y efectiva para quienes tengan los permisos adecuados.</p>

                <h2 style="color: #32CD32;">Confidencialidad</h2>
                <p>Se refiere a la protección de la información contra el acceso no autorizado. Solo las personas con la debida autorización pueden acceder a ciertos datos, preservando la privacidad y la seguridad de la información.</p>

                <h2 style="color: #FFA500;">Disponibilidad</h2>
                <p>Asegura que los sistemas, datos y servicios estén operativos y accesibles para los usuarios legítimos cuando lo necesiten, minimizando interrupciones o caídas en el sistema.</p>

                <h2 style="color: #8A2BE2;">Autenticación</h2>
                <p>Es el proceso de verificar la identidad de los usuarios, dispositivos o sistemas para garantizar que solo los usuarios autorizados puedan acceder a los recursos protegidos. Puede incluir contraseñas, tokens, biometría, entre otros métodos.</p>

                <h2 style="color: #FF4500;">Integridad</h2>
                <p>Garantiza que la información se mantenga exacta y no se altere o modifique sin autorización. Protege los datos contra cambios accidentales o maliciosos, asegurando que permanezcan confiables.</p>

                <h2 style="color: #4682B4;">Control de acceso</h2>
                <p>Es la implementación de políticas y tecnologías para regular quién puede ver, modificar o utilizar la información o los recursos de un sistema. Ayuda a prevenir accesos no autorizados y protege la integridad y confidencialidad de los datos.</p>
            </div>
        </section>
    </main>
</body>
</html>
