<!doctype html>
<html>
    <head>
        <title>Ejercicio 22</title>
    </head>
    <body>
        <?php
            /*
             * @author Álvaro Allén Perlines
             * @since 20-10-2025
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
    </body>
</html>