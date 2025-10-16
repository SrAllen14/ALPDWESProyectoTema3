<!doctype html>
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            /**
             * @author Álvaro Allén Perlines
             * @since 10-10-2025
             * Mostrar la dirección ip del equipo con el que se está accediendo.
             */
            
            //Declaramos la variable y la inicializamos con el valor de la dirección ip.
            $hostname = $_SERVER['REMOTE_ADDR'];
            
            //Mostramos por pantalla el contenido de la variable.
            echo "Mi IP es: " . $hostname;
        ?>
    </body>
</html>