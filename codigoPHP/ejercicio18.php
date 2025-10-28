<!doctype html>
<html>
    <head>
        <title>Ejercicio 18</title>
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
            <h2>Ejercicio 18</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /*
                     * @author Álvaro Allén Perlines
                     * @since 27-10-2025
                     * Recorremos la anterior matriz (array bidimensional) mediante el uso
                     * de funciones.
                     */

                    // Declaramos las constantes $FILAS y $ASIENTOS que almacenan el número 
                    // de filas y asientos que tiene el teatro.
                    define('NUMFILAS', 20);
                    define('NUMASIENTOS', 15);
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
                    
                    
                    // Usamos reset para situar el puntero en la primera fila de la matriz $mTeatro.
                    reset($aTeatro);
                    
                    // Iniciamos el tablero.
                    echo "<table>";
                    // Le damos a la variable $aColumna el valor de $aTeatro usando current(). Como hemos reseteado está en la primera posición.
                    // En caso de no tener nada (current($aTeatro = false) se saldrá del while.
                    while (($aColumna = current($aTeatro)) !== false) {         
                        // Inicializamos la variable $numFila con el número de la fila al que apunta $aTeatro.
                        $numFila = key($aTeatro);

                        echo "<tr>";
                        echo "<td class='filas'>Fila $numFila</td>";

                        // Recorremos cada asiento (columna) de la fila actual
                        reset($aColumna);
                        // Le damos a la variable $aAsiento el valor de $aColumna usando current(). Como hemos reseteado está en la primera posición.
                        // En caso de no tener nada (current($aColumna = false) se saldrá del while.
                        while (($aAsiento = current($aColumna)) !== false) {
                            $numAsiento = key($aColumna);

                            if ($aAsiento !== null) {
                                echo "<td class='ocupado'>$aAsiento</td>";
                            } else {
                                echo "<td class='libre'>F{$numFila}-A{$numAsiento}</td>";
                            }
                            // Pasamos a la siguiente columna.
                            next($aColumna);
                        }

                        echo "<td class='filas'>Fila $numFila</td>";
                        echo "</tr>";
                        // Pasamos a la siguiente fila.
                        next($aTeatro);
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
                <time datetime="2025-10-28">28-10-2025</time>
            </div>
        </footer>
    </body>
</html>