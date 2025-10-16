<!doctype html>
<html>
    <head>
        <title>Ejercicio 12</title>
    </head>
    <body>
        <?php
            /*
             * @author Álvaro Allén Perlines
             * @since 11-10-2025
             * Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
             */
            
            // Mostrando el contenido de la variable superglobal $GLOBALS que contiene el resto de variables superglobales.
            echo '<h2>Variable: $GLOBALS</h2>';
            print_r ($GLOBALS);
            
            echo '<br>';
            echo '<br>';
            // Mostramos el contenido de la variable superglobal $_SERVER
            echo '<h2>Variable: $_SERVER</h2>';
            print_r ($_SERVER);
            echo '<br>';
            echo '<br>';
            // Mostramos el contenido de la variable superglobal $_GET
            echo '<h2>Variable: $_GET</h2>';
            print_r ($_GET);
            echo '<br>';
            echo '<br>';
            // Mostramos el contenido de la variable superglobal $_POST
            echo '<h2>Variable: $_POST</h2>';
            print_r ($_POST);
            echo '<br>';
            echo '<br>';
            // Mostramos el contenido de la variable superglobal $_FILES
            echo '<h2>Variable: $_FILES</h2>';
            print_r ($_FILES);
            echo '<br>';
            echo '<br>';
            // Mostramos el contenido de la variable superglobal $_COOKIE
            echo '<h2>Variable: $_COOKIE</h2>';
            print_r ($_COOKIE);
            echo '<br>';
            echo '<br>';
            // Mostramos el contenido de la variable superglobal $_SESSION
            echo '<h2>Variable: $-SESSION</h2>';
            print_r ($_SESSION);
            echo '<br>';
            echo '<br>';
            // Mostramos el contenido de la variable superglobal $_REQUEST
            echo '<h2>Variable: $_REQUEST</h2>';
            print_r ($_REQUEST);
            echo '<br>';
            echo '<br>';
            // Mostramos el contenido de la variable superglobal $_ENV
            echo '<h2>Variable: $_ENV</h2>';
            print_r ($_ENV);
            
            
            
            // Ahora vamos a mostrar todas estas variables de la forma correcta.
            print_r('<table>');
            foreach ($_SERVER as $vSuperGlobal => $vValor) {
                print_r (`<tr> 
                            <td>$vSuperGlobal</td>
                            <td>$vValor</td>
                        </tr>`);
            }
            print_r('</table>');
        ?>
    </body>
</html>