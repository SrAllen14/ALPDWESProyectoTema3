<!doctype html>
<html>
    <head>
        <title>Ejercicio 12</title>
        <style>
            *{
                box-sizing: border-box;
                margin: 0 auto;
            }
            
            h2{
                margin-top: 10px;
                text-align: center;
            }
            
            table{
                border-collapse: collapse;
                
                & td{
                    border: 1px solid black;
                }
            }
            
            .nombre{
                background-color: lightblue;
            }

            .valor{
                background-color: antiquewhite;
            }
        </style>
    </head>
    <body>
        <?php
            /*
             * @author Álvaro Allén Perlines
             * @since 11-10-2025
             * Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
             */
            
            // Mostrando el contenido de las variables superglobales. Vamos a usar bucles como for() o foreach().
            echo '<h2>Valores de la variable superglobal: $_SERVER</h2>';
            echo "<table>";
            if(!empty($_SERVER)){
                foreach ($_SERVER as $key => $value) {
                    echo "<tr>";
                    echo "<td class='nombre'>{$key}</td>";
                    echo "<td class='valor'>{$value}</td>";
                    echo "</tr>";
                }
            } else{
                echo "<tr>";
                echo "<td class='nombre'>No hay variable</td>";
                echo "<td class='valor'>No hay valor</td>";
                echo "</tr>";
            }
            echo "</table>";
            
            echo '<h2>Valores de la variable superglobal: $_SESSION</h2>';
            echo "<table>";
            if(!empty($_SESSION)){
                foreach ($_SESSION as $key => $value) {
                    echo "<tr>";
                    echo "<td class='nombre'>{$key}</td>";
                    echo "<td class='valor'>{$value}</td>";
                    echo "</tr>";
                }
            }  else{
                echo "<tr>";
                echo "<td class='nombre'>No hay variable</td>";
                echo "<td class='valor'>No hay valor</td>";
                echo "</tr>";
            }
            echo "</table>";
            
            echo '<h2>Valores de la variable superglobal: $_REQUEST</h2>';
            echo "<table>";
            if(!empty($_REQUEST)){
                foreach ($_REQUEST as $key => $value) {
                    echo "<tr>";
                    echo "<td class='nombre'>{$key}</td>";
                    echo "<td class='valor'>{$value}</td>";
                    echo "</tr>";
                }
            } else{
                echo "<tr>";
                echo "<td class='nombre'>No hay variable</td>";
                echo "<td class='valor'>No hay valor</td>";
                echo "</tr>";
            }
            echo "</table>";
            
            echo '<h2>Valores de la variable superglobal: $_ENV</h2>';
            echo "<table>";
            if(!empty($_ENV)){
                foreach ($_ENV as $key => $value) {
                    echo "<tr>";
                    echo "<td class='nombre'>{$key}</td>";
                    echo "<td class='valor'>{$value}</td>";
                    echo "</tr>";
                }
            } else{
                echo "<tr>";
                echo "<td class='nombre'>No hay variable</td>";
                echo "<td class='valor'>No hay valor</td>";
                echo "</tr>";
            }
            echo "</table>";
            
            echo '<h2>Valores de la variable superglobal: $_COOKIE</h2>';
            echo "<table>";
            if(!empty($_COOKIE)){
                foreach ($_COOKIE as $key => $value) {
                    echo "<tr>";
                    echo "<td class='nombre'>{$key}</td>";
                    echo "<td class='valor'>{$value}</td>";
                    echo "</tr>";
                }
            } else{
                echo "<tr>";
                echo "<td class='nombre'>No hay variable</td>";
                echo "<td class='valor'>No hay valor</td>";
                echo "</tr>";
            }
            echo "</table>";
            
            echo '<h2>Valores de la variable superglobal: $_POST</h2>';
            echo "<table>";
            if(!empty($_POST)){
                foreach ($_POST as $key => $value) {
                    echo "<tr>";
                    echo "<td class='nombre'>{$key}</td>";
                    echo "<td class='valor'>{$value}</td>";
                    echo "</tr>";
                }
            } else{
                echo "<tr>";
                echo "<td class='nombre'>No hay variable</td>";
                echo "<td class='valor'>No hay valor</td>";
                echo "</tr>";
            }
            echo "</table>";
            
            echo '<h2>Valores de la variable superglobal: $_GET</h2>';
            echo "<table>";
            if(!empty($_GET)){
                foreach ($_GET as $key => $value) {
                    echo "<tr>";
                    echo "<td class='nombre'>{$key}</td>";
                    echo "<td class='valor'>{$value}</td>";
                    echo "</tr>";
                }
            } else{
                echo "<tr>";
                echo "<td class='nombre'>No hay variable</td>";
                echo "<td class='valor'>No hay valor</td>";
                echo "</tr>";
            }
            echo "</table>";
            
            echo '<h2>Valores de la variable superglobal: $_FILES</h2>';
            echo "<table>";
            if(!empty($_FILES)){
                foreach ($_FILES as $key => $value) {
                    echo "<tr>";
                    echo "<td class='nombre'>{$key}</td>";
                    echo "<td class='valor'>{$value}</td>";
                    echo "</tr>";
                }
            } else{
                echo "<tr>";
                echo "<td class='nombre'>No hay variable</td>";
                echo "<td class='valor'>No hay valor</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>