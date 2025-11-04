<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 3</title>
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
            <h2>Ejercicio 3</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Allén Perlines
                     * @since 27-10-2025
                     * Muestra la fecha y hora en formato español usando la clase DateTime.
                     */

                    // Establecemos el idioma de la aplicación. Esto va a afectar a todo el código.
                    setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish');

                    // Inicializamos las variables. Está inicializada con la fecha del uso horario de Madrid, España.
                    $fecha = new DateTime('now', new DateTimeZone('Europe/Madrid'));


                    // Mostrar por pantalla la fecha con el formato en castellano.
                    print("<p>Formato de fecha y hora: 'Hoy es NombreDia DD de MM de YY y la hora es HH:MM:SS AM/PM'</p>");
                    echo strftime("%A %d de %B de %Y", $fecha->getTimestamp());
                    
                    echo "<br>";
                    echo "<br>";
                    // Mostrar la fecha con formato xx/xx/xxxx.
                    print("<p>Formato de fecha: DD-MM-YY</p>");
                    echo $fecha->format("d-m-y");

                    echo "<br>";
                    echo "<br>";

                    // Mostrar la hora con formato HH:MM AM/PM.
                    print("<p>Formato de hora HH:MM AM/PM</p>");
                    echo $fecha->format("h:i a");

                    echo "<br>";
                    echo "<br>";

                    // Mostrar la hora con formato HH:MM:SS AM/PM.
                    print("<p>Formato de hora: HH:MM:SS AM/PM</p>");
                    echo $fecha->format("h:i:s a");
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php">
               Álvaro Allén Perlines
                </a>
                <time datetime="2025-11-04">04-11-2025</time>
            </div>
        </footer>
    </body>
</html>