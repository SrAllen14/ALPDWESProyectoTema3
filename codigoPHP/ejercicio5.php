<!doctype html>
<html>
    <head>
        <title>Ejercicio 5</title>
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
            <h2>Ejercicio 5</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Allén Perlines
                     * @since 27-10-2025
                     * Inicializa y muestra por pantalla un variable con marca de tiempo (TimeStamp).
                     */

                    // Inicializamos la varible
                    $fecha = new DateTime();
                    $fecha2 = date_create();


                    //Mostramos la marca de tiempo actual.
                    echo "<p>Mostramos el timestamp cogiendo la fecha actual en una variable y usando el método getTimestamp(): </p>".$fecha->getTimestamp();

                    echo "<br>";
                    echo "<br>";

                    //Otra forma de hacerlo
                    echo "<p>Mostramos el timestamp con el método estático date_timestamp_get:</p>".date_timestamp_get($fecha2);
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