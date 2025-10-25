<!doctype html>
<html>
    <head>
        <title>Ejercicio 14</title>
    </head>
    <body>
        <?php
            /*
             * @author Álvaro Allén Perlines
             * @since 25-10-2025
             * Comprobar las librerias que estás utilizando en tu entorno de desarrolo y explotación. 
             * Crear tu propia librería de funciones.
            */
        
            echo "<h3>Listado Completo de Extensiones Cargadas</h3>";

            echo "<pre>";
            print_r(get_loaded_extensions());
            echo "</pre>";

            // Diferentes formas de importar una libreria
            //include "231018libreriaValidacion.php";
            //include_once "231018libreriaValidacion.php";
            //require "231018libreriaValidacion.php";
            require_once "../core/231018libreriaValidacion.php";

            // Uso de la libreria en este caso con funciones estáticas
            echo "<h3>Prueba libreria con validar DNI  (correcto no devuelve nada)</h3>";
            echo "<p>12345678Z: ". validacionFormularios::validarDni('12345678Z') ."</p>";
            echo "<p>12365478J: ". validacionFormularios::validarDni('12365478J') ."</p>"; 
        ?>
    </body>
</html>