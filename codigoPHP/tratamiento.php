<html>
    <head>
        <title>Tratamiento ejercicio 21</title>
        <style>
            *{
                box-sizing: border-box;
                margin: 0 auto;
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
                text-align: justify;
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

            form{
                fieldset{
                    border: none;
                }
                label{
                    width: 250px;
                }
            }
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 21</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /*
                     * @author Álvaro Allén Perlines
                     * @since 20-10-2025
                     * Código que recoge los datos introducidos y enviados en el formulario
                     * ejercicio21.php. En este caso no se recoge si el campo está vacio o
                     * si contiene un valor correcto.
                     */
                    /*
                        Mostrar por pantalla, con etiquetas HTML, los valores enviados desde
                        el archivo ejercicio21.php. 
                        Se puede guardar los datos en variables y mostrarlos después por pantalla
                        mediante echo, print(), printf(), print_r(), etc...
                    */

                    $vNombre = $_REQUEST['name'];
                    $vEdad = $_REQUEST['age'];

                    echo "<h2>Respuesta al formulario</h2><br>";
                    echo "Nombre: {$_REQUEST['name']}<br>";
                    echo "Edad: {$_REQUEST['age']}<br>";
                    echo "Mostrado mediante variable:<br>";
                    echo "Nombre: $vNombre<br>";
                    echo "Edad: $vEdad<br>";
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php">
               Álvaro Allén Perlines
                </a>
                <time datetime="2025-10-28">28-10-2025</time>
            </div>
        </footer>
    </body>
</html>
