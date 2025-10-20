<html>
    <head>
        <title>Tratamiento ejercicio 21</title>
    </head>
    <body>
        <?php
            /*
             * @author Álvaro Allén Perlines
             * @since 20-10-2025
             * Código que recoge los datos introducidos y enviados en el formulario
             * ejercicio21.php. En este caso no se recoge si el campo está vacio o
             * si contiene un valor correcto.
             */
            /*
                Mostrar por pantalla, con etiquetas HTML, los valores enviados desde
                el archivo ejercicio21.php. 
                Se puede guardar los datos en variables y mostrarlos después por pantalla
                mediante echo, print(), printf(), print_r(), etc...
            */
            
            $vNombre = $_REQUEST['name'];
            $vEdad = $_REQUEST['age'];
            
            echo "<h2>Respuesta al formulario</h2><br>";
            echo "Nombre: {$_REQUEST['name']}<br>";
            echo "Edad: {$_REQUEST['age']}<br>";
            echo "Mostrado mediante variable:<br>";
            echo "Nombre: $vNombre<br>";
            echo "Edad: $vEdad<br>";
        ?>
    </body>
</html>
