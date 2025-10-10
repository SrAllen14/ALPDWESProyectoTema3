<!doctype html>
<html lang="es">
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
            
            // Establecemos el idioma de la aplicación. Esto va a afectar a todo el código.
            setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish');
            
            // Inicializamos las variables. Está inicializada con la fecha del uso horario de Madrid, España.
            $fecha = new DateTime('now', new DateTimeZone('Europe/Madrid'));
            
            
            // Mostrar por pantalla la fecha con el formato en castellano.
            echo "Hoy es " . $fecha->format("l") . " " . $fecha->format("d") . " de " . $fecha->format("M") . " de " . $fecha->format("y") . " y la hora es " . $fecha->format("h:i:s a");
            
            echo "<br>";
            
            // Mostrar la fecha con formato xx/xx/xxxx.
            echo $fecha->format("d-m-y");
            
            echo "<br>";
            
            // Mostrar la hora con formato HH:MM AM/PM.
            echo $fecha->format("h:i a");
            
            echo "<br>";
            
            // Mostrar la hora con formato HH:MM:SS AM/PM.
            echo $fecha->format("h:i:s a");
        ?>
    </body>
</html>