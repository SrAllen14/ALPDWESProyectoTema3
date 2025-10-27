<!doctype html>
<html>
    <head>
        <title>Ejercicio 7</title>
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
            <h2>Ejercicio 7</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Allén Perlines
                     * @since 27-10-2025
                     * Mostramos el nombre del fichero que se está ejecutando.
                     */
                    #includes <CURLFile.io>

                    // Inicializamos las variables.
                    $archivo = $_SERVER['PHP_SELF'];

                    // basename() retorna el nombre del archivo que tiene la ruta indicada como parámetro.

                    // Mostramos por pantalla el nombre del archivo.
                    echo "La ruta de este archivo es: <p>" . $archivo."</p>";

                    /*
                     * Otra opción sería:
                     * $nombreArchivo = basename('./ejercicio7.php');
                     */
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