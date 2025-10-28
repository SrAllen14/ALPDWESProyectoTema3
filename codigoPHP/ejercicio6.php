<!doctype html>
<html>
    <head>
        <title>Ejercicio 6</title>
        <style>
            *{
                margin: 0 auto;
                padding: 0 auto;
            }
            body{
                font-family: Arial, sans-serif;
                background: #f4f6f9;
                align-items: center;
                text-align: center;
            }

            nav{
                background-color: #456D96; 
                color: white;
            }

            .ejercicio{
                margin-top: 10px;
                margin-bottom: 10px;
                width: 750px;
                border: 1px solid black;
                border-radius: 10px;

                p{
                    font-weight: bold;
                }
            }

            footer{
                margin: auto;
                background-color: #456d96;
                text-align: center;
                align-content: center;
                height: 50px;;
                color: white;

                & a{
                   text-decoration: none; 
                }
            }
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 6</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Allén Perlines
                     * @since 27-10-2025
                     * Operar con fechas: calcular la fecha y el dia de la semana dentro de 60 dias.
                     */

                    // Inicializamos las variables.
                    $oFechaHoy = new DateTime("now", new DateTimeZone('Europe/Madrid'));

                    // Mostramos la fecha actual en Madrid, España.
                    echo "<p>Fecha actual: </p>" . $oFechaHoy->format('d-m-y h:i:s');
                    echo "<br>";
                    echo "<br>";

                    // Muestra por pantalla la fecha actual con 60 dias añadidos.
                    echo "<p>Fecha dentro de 60 días: </p>" . $oFechaHoy->add(new DateInterval('P60D'))->format('d-m-y h:i:s');
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php">
               Álvaro Allén Perlines
                </a>
                <time datetime="2025-10-27">27-10-2025</time>
            </div>
        </footer>
    </body>
</html>