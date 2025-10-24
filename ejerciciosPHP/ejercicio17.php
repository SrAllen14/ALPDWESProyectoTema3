<!doctype html>
<html>
    <head>
        <title>Ejercicio 17</title>
        <style>
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
        <?php
            /*
             * @author Álvaro Allén Perlines
             * @since 17-10-2025
             * Matriz (array bidimensional) donde se almacenan el nombre de las
             * personas que tienen reservado un asiento en un teatro de 20 filas
             * y 15 asientos por fila.
             */
             
            // Declaramos las constantes $FILAS y $ASIENTOS que almacenan el número 
            // de filas y asientos que tiene el teatro.
            define('NUMFILAS', '20');
            define('NUMASIENTOS', '15');
            // Declaramos las variables.
            $aNombres = ['Pepe', 'Manuel', 'Teresa', 'Ainhoa', 'Miguel'];
            $aTeatro;
            
            // Inicializamos la matriz de 20X15 con " x " como valor por defecto.
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
            
            // Mostramos la información de la matriz.
            echo "<table>";
            for($iFila = 1; $iFila <= NUMFILAS; $iFila++){
                echo "<tr>";
                echo "<td class='filas'>Fila ".($iFila)."</td>";
                for($iColumna = 1; $iColumna <= NUMASIENTOS; $iColumna++){
                    if(is_null($aTeatro[$iFila][$iColumna])){
                        echo "<td class='libre'>F".($iFila)."-A".($iColumna)."</td>";
                    } else{
                        echo "<td class='ocupado'>" . $aTeatro[$iFila][$iColumna]. "</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
            
            echo "<br>";
            
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
    </body>
</html>