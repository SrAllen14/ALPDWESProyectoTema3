<!doctype html>
<html>
    <head>
        <title>Ejercicio 21</title>
        <style>
            *{
                box-sizing: border-box;
                margin: 0;
            }
            
            label{
                width: 250px;
            }
        </style>
    </head>
    <body>
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
        <?php
            /*
             * @author Álvaro Allén Perlines
             * @since 17-10-2025
             * 
             * Creamos un formulario el cual será mostrado por el archivo tratamiento.php.
             * Al pulsar el boton enviar se almacenaran en la variable $_REQUEST. 
             * Para ver más código ir al archivo tratamiento.php.
             */
        ?>
    </body>
</html>