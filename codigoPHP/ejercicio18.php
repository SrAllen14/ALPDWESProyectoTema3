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
                    echo "<table>";
                    while (($aColumna = current($aTeatro)) !== false) {
                        $numFila = key($aTeatro);

                        echo "<tr>";
                        echo "<td class='filas'>Fila $numFila</td>";

                        // Recorremos cada asiento (columna) de la fila actual
                        reset($aColumna);
                        while (($valor = current($aColumna)) !== false) {
                            $numAsiento = key($aColumna);

                            if ($valor !== null) {
                                echo "<td class='ocupado'>$valor</td>";
                            } else {
                                echo "<td class='libre'>F{$numFila}-A{$numAsiento}</td>";
                            }

                            next($aColumna);
                        }

                        echo "<td class='filas'>Fila $numFila</td>";
                        echo "</tr>";

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

<!-- do{
                        // Declaramos e inicializamos al array $aFila con los valores de la primera fila
                        // de la matriz $mTeatro
                        $aColumna = current($aTeatro);

                        // Situamos el puntero en el inicio del array $aFila que contiene los valores de la
                        // primera fila.
                        reset($aColumna);

                        echo "<tr>";
                        echo "<td class='filas'>Fila ".(key($aTeatro))."</td>";
                            do{
                                if(current($aColumna)!== null){
                                    echo "<td class='ocupado'>". current($aColumna)."</td>"; 
                                } else{
                                    echo "<td class='libre'>F".(key($aTeatro))."-A".(key($aColumna))."</td>";      // key() devuelve la clave del elemento del array. En este caso la usamos para enumerar los asientos.
                                }
                            }while(next($aColumna));                   // Pasamos el puntero al siguiente valor del array $aFila. En caso de no haber valor, devolverá false y saldrá del bucle.  
                            echo "<td class='filas'>Fila ".(key($aTeatro))."</td>";
                            echo "</tr>";
                            
                    }while(next($aTeatro));                            // Pasamos el puntero a la siguiente fila de la matriz $mTeatro. En caso de no haber valor, devolverá false y saldrá del bucle.
 -->