<!doctype html>
<html>
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
            /**
             * @author Álvaro Allén Perlines
             * @since 09-10-2025
             * Inicializa y muestra por pantalla un variable con marca de tiempo (TimeStamp).
             */
             
            // Inicializamos la varible
            $fecha = new DateTime();
            $fecha2 = date_create();
            
            
            //Mostramos la marca de tiempo actual.
            echo $fecha->getTimestamp();
            
            echo "<br>";
            
            //Otra forma de hacerlo
            echo date_timestamp_get($fecha2);
        ?>
    </body>
</html>