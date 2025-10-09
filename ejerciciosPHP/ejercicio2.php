<!doctype html>
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            /**
             * @author Álvaro Allén Perlines
             * @date 09-10-2025
             * 2. Inicializamos una variable heredoc y la mostramos por pantalla.
             */
        
            // Definimos la variable
            $v = "'variable'";
            $vheredoc = <<< IDENTIFICADOR
                    Estoy escribiendo una linea para mostrar 
                    por pantalla y entender que es el heredoc.<br>
                    Por ejemplo esta variable $v se muestra sin
                    necesidad de ""
                    
                    IDENTIFICADOR;

            // Mostramos la variable heredoc.
            print_r($vheredoc);
        ?>
    </body>
</html>
