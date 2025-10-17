<!doctype html>
<html>
    <head>
        <title>Ejercicio 17</title>
        <style>
            td{
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
        
            // Declaramos las variables.
            $aNombres = ["Pepe", "Manuel", "Teresa", "Ainhoa", "Miguel"];
            $mTeatro;
            $bPosicionOcupada = false;
            
            // Inicializamos la matriz de 20X15 con " x " como valor por defecto.
            for($i = 0; $i < 20; $i++){
                for($j = 0; $j < 15; $j++){
                    $mTeatro[$i][$j] = " x ";
                }
            }
            
            $i=0;
            
            // Situamos los nombres del array dentro de la matriz de manera aleatoria.
            // Controlamos que no se sobreescriban los nombres.
            while($i < 5){
                $fila = random_int(0, 19);
                $columna = random_int(0, 14);
                if($mTeatro[$fila][$columna] === " x "){
                    $mTeatro[$fila][$columna] = $aNombres[$i];
                    $i++;
                }
            }
            
            /*for($i = 0; $i < 20; $i++){
                for($j = 0; $j < 15; $j++){
                    if($mTeatro[$i][$j] === " x "){
                        $mTeatro[$i][$j] = ($i+1)."-".($j+1);
                    }
                }
            }*/
            
            // Mostramos la información de la matriz.
            echo "<table>";
            for($i = 0; $i < 20; $i++){
                echo "<tr>";
                for($j = 0; $j < 15; $j++){
                    if($mTeatro[$i][$j] === " x "){
                        echo "<td class='libre'>" . $mTeatro[$i][$j]. "</td>";
                    } else{
                        echo "<td class='ocupado'>" . $mTeatro[$i][$j]. "</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>"
        ?>
    </body>
</html>