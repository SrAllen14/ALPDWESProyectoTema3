<!doctype html>
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
            /**
             * @author Álvaro Allén Perlines
             * @since 09-10-2025
             * Muestra la fecha y hora en formato español usando la clase DateTime.
             */
            
            // Inicializamos las variables.
            $fecha = new DateTime('now', new DateTimeZone('Europe/Madrid'));
            
            
            echo $fecha->format("d-m-y h:i:s");
        ?>
    </body>
</html>