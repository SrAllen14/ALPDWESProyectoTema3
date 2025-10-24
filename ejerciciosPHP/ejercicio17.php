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
        
            $FILAS = 20;
            $ASIENTOS = 15;
            // Declaramos las variables.
            $aNombres = ["Pepe", "Manuel", "Teresa", "Ainhoa", "Miguel"];
            $mTeatro;
            $bPosicionOcupada = false;
            
            // Inicializamos la matriz de 20X15 con " x " como valor por defecto.
            for($i = 1; $i <= $FILAS; $i++){
                for($j = 1; $j <= $ASIENTOS; $j++){
                    $mTeatro[$i][$j] = " x ";
                }
            }
            
            $i=0;
            
            // Situamos los nombres del array dentro de la matriz de manera aleatoria.
            // Controlamos que no se sobreescriban los nombres.
            while($i < 5){
                $fila = random_int(1, 20);
                $columna = random_int(1, 15);
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
            for($i = 1; $i <= $FILAS; $i++){
                echo "<tr>";
                echo "<td class='filas'>Fila ".($i)."</td>";
                for($j = 1; $j <= $ASIENTOS; $j++){
                    if($mTeatro[$i][$j] === " x "){
                        echo "<td class='libre'>F".($i)."-A".($j)."</td>";
                    } else{
                        echo "<td class='ocupado'>" . $mTeatro[$i][$j]. "</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
            
            echo "<br>";
            
            // Vamos a recorrer la matriz mediante un foreach();
            echo "<h3>Tabla con foreach()</h3>";
            
            echo "<table>";
            // En este caso estamos introduciendo en la variable $filas el número de la fila en la que estamos.
            // En la variable $aAsientos tenemos el array de cada $fila.
            foreach ($mTeatro as $filas => $aAsientos) {
                echo "<tr>";
                echo "<td class='filas'>Fila ".($filas)."</td>";
                // Ahora mediante otro foreeach() inicializamos la variable $asiento con el numero de asiento.
                // Y la variable $valor con el contenido de la posición $filas.
                foreach ($aAsientos as $asiento => $valor) {
                    if($valor === " x "){
                        echo "<td class='libre'>F".($asiento)."-A".$filas."</td>";
                    } else{
                        echo "<td class='ocupado'>" . $valor. "</td>";
                    }   
                    
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>