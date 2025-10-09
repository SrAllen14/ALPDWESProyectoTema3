<!doctype html>
<html>
    <head>
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php
            /**
             * @author Álvaro Allén Perlines
             * @since 09-10-2025
             * Mostramos el nombre del fichero que se está ejecutando.
             */
            #includes <CURLFile.io>
             
            // Inicializamos las variables.
            $archivo = './ejercicio7.php';
            
            // basename() retorna el nombre del archivo que tiene la ruta indicada como parámetro.
            $nombreArchivo = basename($archivo);
            
            // Mostramos por pantalla el nombre del archivo.
            echo "El nombre de este archivo es: " . $nombreArchivo;
            
            /*
             * Otra opción sería:
             * $nombreArchivo = basename('./ejercicio7.php');
             */
        ?>
    </body>
</html>