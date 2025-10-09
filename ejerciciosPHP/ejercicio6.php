<!doctype html>
<html>
    <head>
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php
            /**
             * @author Álvaro Allén Perlines
             * @since 09-10-2025
             * Operar con fechas: calcular la fecha y el dia de la semana dentro de 60 dias.
             */
        
            // Inicializamos las variables.
            $fechaHoy = new DateTime("now", new DateTimeZone('Europe/Madrid'));
            
            // Mostramos la fecha actual en Madrid, España.
            echo "Fecha actual: " . $fechaHoy->format('d-m-y h:i:s');
            echo "<br>";
            
            // Muestra por pantalla la fecha actual con 60 dias añadidos.
            echo "Fecha dentro de 60 días: " . $fechaHoy->add(new DateInterval('P60D'))->format('d-m-y h:i:s');
        ?>
    </body>
</html>