<!doctype html>
<html>
    <head>
        <title>Ejercicio 23</title>
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
            <h2>Ejercicio 23</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /*
                     * @author Álvaro Allén Perlines
                     * @since 28-10-2025
                     * Formulario realizado por una persona. Mostrar las respuestas en la misma página.
                     * En caso de haber introducido un valor incorrecto en algún campo, mostrar mensaje 
                     * de error en el lugar del error.
                     */



                    // Importamos la librería necesaria para la validación de los campos
                    require_once '../core/231018libreriaValidacion.php';
                    // Declaramos e inicializamos las variables.
                    $aRespuestas = ["nombre"=>null, "edad"=>null];          // Array que almacena las respuestas correctas.
                    $aErrores = ["nombre"=>null, "edad"=>null];             // Array que almacena los datos erroneos.
                    $entradaOk = true;                                      // Variable booleana que indica o no errores al enviar el formulario.

                    // isset() comprueba que se ha dado al botón de enviar. 
                    // True: valida los datos introducidos.
                    // False: la variable booleana $entradaOk recibe el valor true.
                    if(isset($_REQUEST["enviar"])){
                        // Validamos los datos para cada campo del formulario.

                        $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],100,0,1);
                        $aErrores['edad'] = validacionFormularios::comprobarEntero($_REQUEST['edad']);

                        // Recorremos el array de errores para comprobar si ha habido alguno.
                        // true: la variable booleana $entradaOk recibe el valor false.
                        foreach ($aErrores as $campo => $valor) {
                            if($valor != null){
                                $entradaOk = false;
                            }
                        }
                    } else{
                        $entradaOk = false;                                 // Si el formulario no se ha rellenado nunca.
                    }

                    // Tratamiento del formulario.
                    if($entradaOk){
                        //En caso de que el formulario haya sido rellenado de manera correcta.

                        $aRespuestas['nombre'] = $_REQUEST['nombre'];       // Añadir al campo nombre el valor enviado desde el formulario.
                        $aRespuestas['edad'] = $_REQUEST['edad'];           // Añadir al campo edad el valor introducido en el formulario.

                        // Recorremos el array de respuestas con un foreach para mostrar las respuestas.

                        foreach ($aRespuestas as $campo => $valor) {
                            print("<p>Su $campo es: ".$valor."</p><br>");
                        }
                    } else{
                        // En caso de no haber rellenado el formulario de manera correcta.
                ?>
                    <form action="<?php $_SERVER["PHP_SELF"]                // Aprovechamos que $_SERVER guarda el nombre del archivo actual.?>" method="post">
                        <fieldset>
                            <legend>Formulario básico</legend>
                            <label for='nombre'>Nombre:</label>
                            <input type='text' name='nombre' class='nombre'/>
                            <?php
                                if($aErrores['nombre'] != null) {echo "<a style='color:red;'>{$aErrores['nombre']}</a>";}
                            ?>
                            <br>
                            <label for='edad'>Edad:</label>
                            <input type='number' name='edad' class='edad'/>
                            <?php
                                if($aErrores['edad'] != null){ echo"<a style='color:red;'>{$aErrores['edad']}</a>";}
                            ?>
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