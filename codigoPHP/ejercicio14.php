<!doctype html>
<html>
    <head>
        <title>Ejercicio 14</title>
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
            <h2>Ejercicio 14</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /*
                     * @author Álvaro Allén Perlines
                     * @since 27-10-2025
                     * Comprobar las librerias que estás utilizando en tu entorno de desarrolo y explotación. 
                     * Crear tu propia librería de funciones.
                    */

                    echo "<h3>Listado Completo de Extensiones Cargadas</h3>";

                    echo "<pre>";
                    print_r(get_loaded_extensions());
                    echo "</pre>";

                    // Diferentes formas de importar una libreria
                    //include "231018libreriaValidacion.php";
                    //include_once "231018libreriaValidacion.php";
                    //require "231018libreriaValidacion.php";
                    require_once "../core/231018libreriaValidacion.php";

                    // Uso de la libreria en este caso con funciones estáticas
                    echo "<h3>Prueba libreria con validar DNI  (correcto no devuelve nada)</h3>";
                    echo "<p>12345678Z: ". validacionFormularios::validarDni('12345678Z') ."</p>";
                    echo "<p>12365478J: ". validacionFormularios::validarDni('12365478J') ."</p>"; 
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