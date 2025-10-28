<!doctype html>
<html>
    <head>
        <title>Ejercicio 2</title>
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
            <h2>Ejercicio 2</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Allén Perlines
                     * @date 27-10-2025
                     * 2. Inicializamos una variable heredoc y la mostramos por pantalla.
                     */

                    // Definimos la variable
                    $v = "'variable'";
                    $vheredoc = <<< IDENTIFICADOR
                            <p>Estoy escribiendo una linea para mostrar 
                            por pantalla y entender que es el heredoc.<br>
                            Por ejemplo esta variable $v se muestra sin
                            necesidad de ""</p>

                            IDENTIFICADOR;

                    // Mostramos la variable heredoc.
                    print("Estamos trabajando con una variable de tip heredoc y todo lo mostrado en negrita es contenido de dicha variable:");
                    print_r($vheredoc);
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
