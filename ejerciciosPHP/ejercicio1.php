<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
            /**
             * @author Álvaro Allén
             * @since 09-10-2025
             * Vamos a iniciarlizar unas variables con cada tipo de dato que existe en PHP.
             * No hace falta indicar el tipo de la variable.
             */
             
            $nombre = "Álvaro";    // Variable de tipo String
            $edad = 20;            // Variable de tipo int
            $dinero = 35.34;       // Variable de tipo float
            $flag = true;     // Variable de tipo booleana

            // Mostrar variables mediante echo
            // Se pueden introducir varios parámetros
            // La concatenación se realiza con un . 
            // La variables de tipo bool muestran su valor de esta forma: "" si es false y "1" si es true.
            echo 'La variable $nombre tiene como valor: ' . $nombre . ' y es de tipo ' . gettype($nombre) . "<br>";
            echo 'La variable $edad tiene como valor: ' . $edad . ' y es de tipo ' . gettype($edad) . "<br>";
            echo 'La variable $dinero tiene como valor: ' . $dinero . 'y es de tipo ' . gettype($dinero) . "<br>";
            echo 'La variable $flag tiene como valor: ' . $flag . ' y es de tipo ' . gettype($flag) . "<br>";
            
            
            echo "<br><br>";
            
            //Mostrar variables mediante print
            print("La variable de tipo " . gettype($nombre) . " tiene como valor: " . $nombre . "<br>");
            print("La variable de tipo " . gettype($edad) . " tiene como valor: " . $edad . "<br>");
            print("La variable de tipo " . gettype($dinero) . " tiene como valor: " . $dinero . "<br>");
            print("La variable de tipo " . gettype($flag) . " tiene como valor: " . $flag . "<br>");
            
            
            echo "<br><br>";
            
            // Mostrar variables mediante printf
            printf("La variable de tipo %s tiene como valor: %s<br>", gettype($nombre), $nombre);
            printf("La variable de tipo %s tiene como valor: %d<br>", gettype($edad), $edad );
            printf("La variable de tipo %s tiene como valor: %2.1f<br>", gettype($dinero), $dinero);
            printf("La variable de tipo %s tiene como valor: %d<br>", gettype($flag), $flag);
              
            
            echo "<br><br>";
            
            //Mostrar las variables mediante print_r
            print_r("La variable de tipo " . gettype($nombre) . " tiene como valor: " . $nombre . "<br>");
            print_r("La variable de tipo " . gettype($edad) . " tiene como valor: " . $edad . "<br>");
            print_r("La variable de tipo " . gettype($dinero) . " tiene como valor: " . $dinero . "<br>");
            print_r("La variable de tipo " . gettype($flag) . " tiene como valor: " . $flag . "<br>");
            
        ?>
    </body>
</html>
