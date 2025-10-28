<!doctype html>
<html>
    <head>
        <title>Ejercicio 24</title>
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
            <h2>Ejercicio 24</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Allén Perlines
                     * @date 28-10-2025
                     * 
                     * Construir un formulario para recoger un cuestionario realizado a una persona y 
                     * mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que 
                     * alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, 
                     * pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario 
                     * y no tendremos que volver a teclearlas.
                     */
                    // Establecemos la configuración de fecha, hora y formato de España
                    setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish');
                    // Definimos una variable de tipo DateTime con la fecha actual de España
                    
                    // Enlace para importar las librerías de validación de campos
                    require_once '../core/231018libreriaValidacion.php';
                    require_once '../core/miLibreriaValidacion.php';

                    //inicialización de variables
                    $aErrores = [
                        'nombre' => '',
                        'edad' => '',
                        'fecha' => ''
                    ];
                    $aRespuestas = [
                        'nombre' => '',
                        'edad' => '',
                        'fecha' => ''
                    ];
                    $entradaOK = true;

                    //Para cada campo del formulario se valida la entrada y se actua en consecuencia
                    if (isset($_REQUEST['enviar'])) {//se cumple si el boton es submit
                        //Validación de los datos de los campos del formulario
                        $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], 80, 1, 1);
                        $aErrores['edad'] = validacionFormularios::comprobarEntero($_REQUEST['edad'], 120, 0, 0);
                        $aErrores['fecha'] = miLibreriaValidacion::validarNacimiento($_REQUEST['fecha'], $_REQUEST['edad']);

                        //recorre el array de errores para detectar si hay alguno
                        foreach ($aErrores as $campo => $valorCampo) {
                            if ($valorCampo != null) {//Si encuentra algún error 
                                $entradaOK = false; // la entrada no es correcta
                            }
                        }
                    } else {
                        //Si no se ha aceptado el formulario
                        $entradaOK = false;
                    }
                    //Tratamiento del formulario
                    if ($entradaOK) {
                        //REllenamos el array de respuesta con los valores que ha introducido el usuario
                        $aRespuestas['nombre'] = $_REQUEST['nombre'];
                        $aRespuestas['edad'] = $_REQUEST['edad'];
                        $aRespuestas['fecha'] = $_REQUEST['fecha'];

                        //Se recorre el array de las respuestas y se muestran
                        print("<br><h3>Respuestas del usuario</h3><br>");
                        foreach ($aRespuestas as $campo => $valorCampo) {
                            print("<p>El $campo del usuario : " . $valorCampo . '</p><br>');
                        }
                    } else {
                        //si hay algún error se vuelve a mostrar el formulario
                    ?>
                    <section>
                        <h2>Rellena el formulario.</h2>
                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

                            <label for="tipoFormulario">Tipo del formulario</label><br>
                            <input name="tipoFormulario" id="tipoFormulario" type="text" value="Formulario de Seguridad" readonly><br>

                            <label for="nombre">Nombre completo:</label>
                            <a style='color:red'><?php echo $aErrores['nombre'] ?></a><br>
                            <input  name="nombre" id="nombre" type="text" value='<?php echo(empty($aErrores['nombre'])) ? ($_REQUEST['nombre'] ?? '') : ''; ?>'><br>

                            <label for="edad">Edad:</label>
                            <a style='color:red'><?php echo $aErrores['edad'] ?></a><br>
                            <input name="edad" id="edad" type="number" value='<?php echo(empty($aErrores['edad'])) ? ($_REQUEST['edad'] ?? '') : ''; ?>'><br>

                            <label for="carnet">Introduzca la fecha de nacimiento</label><br>
                            <a style='color:red'><?php echo $aErrores['fecha'] ?></a><br>
                            <input type="date" name="fecha" id="nacimiento"><br>

                            <button type="submit" name="enviar">Enviar</button>

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