<!doctype html>
<html>
    <head>
        <title>Ejercicio 22</title>
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
            <h2>Ejercicio 22</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /*
                     * @author Álvaro Allén Perlines
                     * @since 28-10-2025
                     * Forma de mostrar las respuestas de un formlario desde la misma 
                     * página una vez dado al botón de enviar.
                     */

                    // isset() comprueba que se ha dado al botón de enviar. 
                    // True: nos muestra las respuestas enviadas en los campos.
                    // False: nos muestra el contenido del formulario.
                    if(isset($_REQUEST["enviar"])){
                        $vNombre = $_REQUEST['name'];
                        $vEdad = $_REQUEST['age'];

                        echo "<h2>Respuesta al formulario</h2><br>";
                        echo "Nombre: $vNombre<br>";
                        echo "Edad: $vEdad<br>";
                    } else{
                ?>
                <form action="<?php $_SERVER["PHP_SELF"]  //Aprovechamos que $_SERVER guarda el nombre del archivo actual.?>" method="post">
                    <fieldset>
                        <legend>Formulario básico</legend>
                        <label for='name'>Nombre:</label>
                        <input name="name" type="text" id='name' placeholder="Nombre...">
                        <br>
                        <label for='age'>Edad:</label>
                        <input name="age" type='number' id="age">
                        <br>
                        <input type="submit" name="enviar" value="Enviar">
                    </fieldset>
                </form>
                <?php
                    }
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