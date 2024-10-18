<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sección 2</title>
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
                <h1>Confidencialidad de la información</h1>

                <h2 style="color: #1E90FF;">Ley General de protección de datos Personales de México</h2>
                <p>Esta ley establece los principios, derechos y obligaciones para proteger los datos personales en posesión de las entidades gubernamentales en México, asegurando su uso adecuado y protegiendo la privacidad de los ciudadanos.</p>

                <h2 style="color: #32CD32;">Ley de Propiedad Industrial</h2>
                <p>Regula la protección de los derechos de propiedad industrial en México, como patentes, marcas y secretos industriales, garantizando los derechos exclusivos de explotación y el reconocimiento de los creadores e innovadores.</p>

                <h2 style="color: #FFA500;">Ley Federal de Derechos de Autor</h2>
                <p>Protege los derechos morales y patrimoniales de los autores en México, asegurando que las obras literarias, artísticas y científicas sean reconocidas y protegidas frente a su uso no autorizado.</p>

                <h2 style="color: #8A2BE2;">Ley Federal de Datos Personales en Posesión de Particulares</h2>
                <p>Establece las normas para la protección de los datos personales que están en posesión de empresas privadas, regulando cómo deben ser tratados, almacenados y protegidos estos datos, así como los derechos de los titulares.</p>

                <h2 style="color: #FF4500;">Código Penal Federal</h2>
                <p>Es el conjunto de leyes que regulan los delitos y sanciones en México, incluyendo delitos relacionados con la violación de la confidencialidad y la protección de datos personales.</p>

                <h2 style="color: #4682B4;">Ley General de Transparencia y Acceso a la Información</h2>
                <p>Regula el acceso público a la información en posesión del gobierno y otros organismos públicos, garantizando que los ciudadanos puedan conocer y solicitar información de forma libre y transparente.</p>

                <h2 style="color: #20B2AA;">Criptografía Simétrica</h2>
                <p>Es un tipo de criptografía donde la misma clave se utiliza tanto para cifrar como para descifrar la información. Es rápida y eficiente, pero presenta riesgos si la clave es interceptada.</p>

                <h2 style="color: #DC143C;">Criptografía Asimétrica</h2>
                <p>Utiliza un par de claves, una pública para cifrar y una privada para descifrar. Esta técnica es más segura que la criptografía simétrica, pero es más lenta en comparación.</p>

                <h2 style="color: #0000CD;">Cifrado por Bloques</h2>
                <p>El cifrado por bloques toma un bloque de texto plano y lo cifra como una unidad completa, generalmente de un tamaño fijo (ej. 64 o 128 bits), lo que permite una encriptación más estructurada.</p>

                <h2 style="color: #A52A2A;">Cifrado por Flujo</h2>
                <p>Este tipo de cifrado encripta los datos bit por bit o carácter por carácter, lo que es útil para flujos de datos continuos o en tiempo real, como transmisiones en vivo.</p>
            </div>
        </section>
    </main>
</body>
</html>
