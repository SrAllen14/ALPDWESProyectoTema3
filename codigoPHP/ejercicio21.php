<!doctype html>
<html>
    <head>
        <title>Ejercicio 21</title>
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
                <form action="tratamiento.php" method="post"> 
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
            </div>
        </main>
        
        <?php
            /*
             * @author Álvaro Allén Perlines
             * @since 28-10-2025
             * 
             * Creamos un formulario el cual será mostrado por el archivo tratamiento.php.
             * Al pulsar el boton enviar se almacenaran en la variable $_REQUEST. 
             * Para ver más código ir al archivo tratamiento.php.
             */
        ?>
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