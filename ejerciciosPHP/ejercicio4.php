<!doctype html>
<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
            /**
             * @author Álvaro Allén Perlines
             * @since 09-10-2025
             * Mostrar la fecha de Oporto por pantalla.
             */
        
            // Ajustamos la fecha y hora a la zona de Lisboa.
            date_default_timezone_set("Europe/Lisbon");
            
            // Usamos date("formato") para poner el formato de fecha y hora de Portugal.
            echo date("d-m-y h:i:s");
        ?>
    </body>
</html>