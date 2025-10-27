<!doctype html>
<html>
    <head>
        <title>Ejercicio 17</title>
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
            td{
                font-size: 12px;
                width: 50px;
                height: 50px;
                border: 1px solid black;
                text-align: center;
            }
            .libre{
                background-color: greenyellow;
            }
            
            .ocupado{
                background-color: lightcoral;
            }
            
            .filas{
                background-color: lightsalmon;
            }
            
            .columnas{
                background-color: lightblue;
            }
            
            .vacio{
                border: 0px;
            }
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 17</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /*
                     * @author Álvaro Allén Perlines
                     * @since 27-10-2025
                     * Matriz (array bidimensional) donde se almacenan el nombre de las
                     * personas que tienen reservado un asiento en un teatro de 20 filas
                     * y 15 asientos por fila.
                     */

                    // Declaramos las constantes $FILAS y $ASIENTOS que almacenan el número 
                    // de filas y asientos que tiene el teatro.
                    define('NUMFILAS', '20');
                    define('NUMASIENTOS', '15');
                    // Declaramos las variables.
                    $aTeatro;

                    // Inicializamos la matriz de 20X15 con null como valor por defecto.
                    for($iFila = 1; $iFila <= NUMFILAS; $iFila++){
                        for($iColumna = 1; $iColumna <= NUMASIENTOS; $iColumna++){
                            $aTeatro[$iFila][$iColumna] = null;
                        }
                    }

                    $aTeatro[2][8] = 'Pepe';
                    $aTeatro[4][12] = 'Manuel';
                    $aTeatro[3][4] = 'Teresa';
                    $aTeatro[12][9] = 'Ainhoa';
                    $aTeatro[20][1] = 'Miguel';

                    // Vamos a recorrer la matriz mediante un foreach();
                    echo "<h3>Tabla con foreach()</h3>";

                    echo "<table>";
                    echo "<tr><td class='vacio'}></td>";
                    for($iColumna = 1; $iColumna <= NUMASIENTOS; $iColumna++){
                        echo "<td class='columnas'>A-".$iColumna."</td>";
                    }
                    echo "</tr>";
                    // En este caso estamos introduciendo en la variable $filas el número de la fila en la que estamos.
                    // En la variable $aAsientos tenemos el array de cada $fila.
                    foreach ($aTeatro as $iFilas => $aAsientos) {
                        echo "<tr>";
                        echo "<td class='filas'>Fila ".($iFilas)."</td>";
                        // Ahora mediante otro foreeach() inicializamos la variable $asiento con el numero de asiento.
                        // Y la variable $valor con el contenido de la posición $filas.
                        foreach ($aAsientos as $iAsiento => $nombre) {
                            if(is_null($nombre)){
                                echo "<td class='libre'>F".($iFilas)."-A".$iAsiento."</td>";
                            } else{
                                echo "<td class='ocupado'>" . $nombre. "</td>";
                            }   
                        }
                        echo "<td class='filas'>Fila ".($iFilas)."</td>";
                        echo "</tr>";
                    }
                    echo "<tr><td class='vacio'></td>";
                    for($iColumna = 1; $iColumna <= NUMASIENTOS; $iColumna++){
                        echo "<td class='columnas'>A-".$iColumna."</td>";
                    }
                    echo "</tr>";
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