<!doctype html>
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            /*
             * @author Álvaro Allén Perlines
             * @since 11-10-2025
             * Mostrar el path donde se encuentra el fichero que se está ejecutando.
             */
        
            // Declaramos la variable.
            $rutaArchivo = $_SERVER["PHP_SELF"];
            
            // Mostramos la ruta por pantalla.
            echo "La ruta del archivo actual es: " . $rutaArchivo;
        ?>
    </body>
</html>