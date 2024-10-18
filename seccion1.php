<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sección 1</title>
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
                <h1>Ataques cibernéticos</h1>

                <h2 style="color: #1E90FF;">DDoS (Denegación de Servicio Distribuida)</h2>
                <p>Es un tipo de ataque cibernético en el que múltiples sistemas, a menudo ordenadores infectados o "zombies", envían una gran cantidad de solicitudes a un servidor o red, sobrecargándolos y causando que dejen de funcionar correctamente o se vuelvan inaccesibles para los usuarios legítimos.</p>

                <h2 style="color: #32CD32;">Ordenador Zombie</h2>
                <p>Es un ordenador que ha sido infectado con malware y está controlado de manera remota por un ciberdelincuente sin que el propietario se dé cuenta. Estos ordenadores se utilizan comúnmente en ataques DDoS o en redes botnet.</p>

                <h2 style="color: #FFA500;">Ciberdelincuente</h2>
                <p>Es una persona que comete delitos utilizando tecnologías de la información, como ataques a sistemas, robos de datos, fraudes electrónicos y otros tipos de actividades ilegales en el mundo digital.</p>

                <h2 style="color: #8A2BE2;">Botmaster</h2>
                <p>Es el controlador de una red de bots (botnet). Este individuo o grupo tiene el control sobre los ordenadores infectados (zombies) y los utiliza para realizar ataques DDoS, envío de spam, robos de datos o cualquier otra actividad ilícita.</p>

                <h2 style="color: #FF4500;">Botnet</h2>
                <p>Es una red de ordenadores infectados con malware que permite a un ciberdelincuente controlarlos de manera remota. Estas redes suelen utilizarse para realizar ataques masivos, como DDoS, spam o minería ilegal de criptomonedas.</p>

                <h2 style="color: #4682B4;">Ransomware</h2>
                <p>Es un tipo de malware que encripta los archivos del sistema infectado, bloqueando el acceso del usuario a su información. Luego, los atacantes exigen un rescate (generalmente en criptomonedas) para restaurar el acceso.</p>

                <h2 style="color: #20B2AA;">Disclaimer</h2>
                <p>Es un aviso o descargo de responsabilidad que se utiliza para limitar las responsabilidades legales de una entidad. En el contexto de la ciberseguridad, a menudo se usa para advertir a los usuarios sobre los riesgos del uso de un servicio o software.</p>

                <h2 style="color: #DC143C;">The Morris Worm</h2>
                <p>Fue uno de los primeros gusanos informáticos distribuidos por Internet en 1988, creado por Robert Tappan Morris. Este gusano no estaba diseñado para causar daño, pero debido a un error en su código, terminó sobrecargando miles de servidores y sistemas, lo que causó importantes interrupciones en la red.</p>

                <h2 style="color: #0000CD;">Ciberwarfare (Guerra Cibernética)</h2>
                <p>Se refiere a ataques cibernéticos realizados por un estado o nación contra otra con el objetivo de causar daño, interrumpir servicios críticos o comprometer infraestructuras importantes. Estos ataques suelen estar dirigidos a gobiernos, sistemas militares y redes estratégicas.</p>

                <h2 style="color: #A52A2A;">Stuxnet</h2>
                <p>Es un gusano informático descubierto en 2010, que fue diseñado para atacar y sabotear específicamente las centrifugadoras nucleares de Irán. Es uno de los ejemplos más conocidos de ciberwarfare, ya que se cree que fue desarrollado por EE.UU. e Israel.</p>

                <h2 style="color: #FF69B4;">Moonlight Maze</h2>
                <p>Es el nombre de una operación de espionaje cibernético dirigida por hackers rusos a finales de los 90, que afectó a sistemas informáticos del gobierno de los EE.UU., robando información clasificada de agencias militares y gubernamentales.</p>

                <h2 style="color: #FFD700;">Operación Aurora</h2>
                <p>Fue una serie de ciberataques organizados contra empresas tecnológicas como Google, Adobe y otras, descubiertos en 2009. Se cree que los ataques fueron realizados por hackers chinos, con el objetivo de robar propiedad intelectual y acceder a información confidencial.</p>

                <h2 style="color: #7B68EE;">Freeze it into submission</h2>
                <p>Este término no es un concepto técnico común, pero en el contexto de ciberseguridad podría referirse a la técnica de sobrecargar o bloquear los recursos de un sistema hasta que el sistema deje de funcionar, algo similar a un ataque DDoS.</p>

                <h2 style="color: #ADFF2F;">WannaCry</h2>
                <p>Fue un ransomware que causó una gran pandemia en 2017, infectando a cientos de miles de ordenadores en más de 150 países. Afectó principalmente a organizaciones grandes, encriptando los archivos de los sistemas infectados y exigiendo un rescate en Bitcoin para liberarlos.</p>

                <h2 style="color: #DAA520;">Petya</h2>
                <p>Es otro tipo de ransomware que, a diferencia de otros, no solo encripta archivos, sino que cifra el registro maestro de arranque del disco, lo que impide que el sistema operativo arranque. Una variante conocida como "NotPetya" fue particularmente destructiva en 2017.</p>

                <h2 style="color: #4B0082;">Equifax (ataque)</h2>
                <p>Fue una violación masiva de datos que ocurrió en 2017, en la que se comprometieron los datos personales de aproximadamente 147 millones de personas. Los hackers accedieron a información sensible como números de seguridad social, direcciones y números de tarjetas de crédito.</p>

                <h2 style="color: #FF1493;">Cam4 (ataque)</h2>
                <p>En marzo de 2020, la plataforma de transmisión en vivo Cam4 sufrió una filtración masiva de datos en la que se expusieron más de 10 mil millones de registros, incluyendo datos personales de los usuarios como direcciones IP
