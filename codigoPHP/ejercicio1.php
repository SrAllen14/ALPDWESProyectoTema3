<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 1</title>
        <style>
            *{
                margin: 0 auto;
                padding: 0 auto;
            }
            body{
                font-family: Arial, sans-serif;
                background: #f4f6f9;
                align-items: center;
                text-align: center;
            }

            nav{
                background-color: #456D96; 
                color: white;
            }

            .ejercicio{
                margin-top: 10px;
                margin-bottom: 10px;
                width: 750px;
                border: 1px solid black;
                border-radius: 10px;

                p{
                    font-weight: bold;
                }
            }

            footer{
                margin: auto;
                background-color: #456d96;
                text-align: center;
                align-content: center;
                height: 50px;;
                color: white;

                & a{
                   text-decoration: none; 
                }
            }
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 1</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Allén
                     * @since 27-10-2025
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
                    echo '<p>Mostrado mediante echo</p><br>';
                    echo 'La variable $nombre tiene como valor: ' . $nombre . ' y es de tipo ' . gettype($nombre) . "<br>";
                    echo 'La variable $edad tiene como valor: ' . $edad . ' y es de tipo ' . gettype($edad) . "<br>";
                    echo 'La variable $dinero tiene como valor: ' . $dinero . 'y es de tipo ' . gettype($dinero) . "<br>";
                    echo 'La variable $flag tiene como valor: ' . $flag . ' y es de tipo ' . gettype($flag) . "<br>";


                    echo "<br><br>";

                    // Mostrar variables mediante print
                    print("<p>Mostrado mediante print</p><br>");
                    print("La variable de tipo " . gettype($nombre) . " tiene como valor: " . $nombre . "<br>");
                    print("La variable de tipo " . gettype($edad) . " tiene como valor: " . $edad . "<br>");
                    print("La variable de tipo " . gettype($dinero) . " tiene como valor: " . $dinero . "<br>");
                    print("La variable de tipo " . gettype($flag) . " tiene como valor: " . $flag . "<br>");


                    echo "<br><br>";

                    // Mostrar variables mediante printf
                    printf("<p>Mostrado mediante printf</p><br>");
                    printf("La variable de tipo %s tiene como valor: %s<br>", gettype($nombre), $nombre);
                    printf("La variable de tipo %s tiene como valor: %d<br>", gettype($edad), $edad );
                    printf("La variable de tipo %s tiene como valor: %2.1f<br>", gettype($dinero), $dinero);
                    printf("La variable de tipo %s tiene como valor: %d<br>", gettype($flag), $flag);


                    echo "<br><br>";

                    // Mostrar las variables mediante print_r
                    print_r("<p>Mostrado mediante print_r</p><br>");
                    print_r("La variable de tipo " . gettype($nombre) . " tiene como valor: " . $nombre . "<br>");
                    print_r("La variable de tipo " . gettype($edad) . " tiene como valor: " . $edad . "<br>");
                    print_r("La variable de tipo " . gettype($dinero) . " tiene como valor: " . $dinero . "<br>");
                    print_r("La variable de tipo " . gettype($flag) . " tiene como valor: " . $flag . "<br>");


                    echo "<br><br>";

                    // Mostrar las variables mediante var_dump
                    // var_dump devuelve la longitud del string pasado como parámetro.
                    var_dump('<p>Mostrado mediante var_dump</p>');
                    echo "<br>";
                    var_dump('La variable de tipo ' . gettype($nombre) . ' tiene como valor: ' . $nombre);
                    echo "<br>";
                    var_dump('La variable de tipo ' . gettype($edad) . ' tiene como valor: ' . $edad);
                    echo "<br>";
                    var_dump('La variable de tipo ' . gettype($dinero) . ' tiene como valor: ' . $dinero);
                    echo "<br>";
                    var_dump('La variable de tipo ' . gettype($flag) . ' tiene como valor: ' . $flag);
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php">
               Álvaro Allén Perlines
                </a>
                <time datetime="2025-10-27">27-10-2025</time>
            </div>
        </footer>
    </body>
</html>
