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
                font-weight: bold;
            }

            .valor{
                background-color: antiquewhite;
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
                text-align: justify;
                margin-top: 10px;
                margin-bottom: 10px;
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
            <h2>Ejercicio 12</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /*
                     * @author Álvaro Allén Perlines
                     * @since 27-10-2025
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