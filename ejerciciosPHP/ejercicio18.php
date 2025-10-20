<!doctype html>
<html>
    <head>
        <title>Ejercicio 18</title>
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
             * @since 20-10-2025
             * Recorremos la anterior matriz (array bidimensional) mediante el uso
             * de funciones.
             */
        
            // Declaramos las variables.
            $FILAS = 20;
            $COLUMNAS = 15;
            $aNombres = ["Pepe", "Manuel", "Teresa", "Ainhoa", "Miguel"];
            $mTeatro;
            $bPosicionOcupada = false;
            
            // Inicializamos la matriz de 20X15 con " x " como valor por defecto.
            for($i = 0; $i < $FILAS; $i++){
                for($j = 0; $j < $COLUMNAS; $j++){
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
            
            
            // Usamos reset para situar el puntero en la primera fila de la matriz $mTeatro.
            reset($mTeatro);
            echo "<table>";
            do{
                // Declaramos e inicializamos al array $aFila con los valores de la primera fila
                // de la matriz $mTeatro
                $aFila = current($mTeatro);
                
                // Situamos el puntero en el inicio del array $aFila que contiene los valores de la
                // primera fila.
                reset($aFila);
                
                echo "<tr>";
                echo "<td class='filas'>Fila ".(key($mTeatro)+1)."</td>";
                    do{
                        if(current($aFila)!== " x "){
                            echo "<td class='ocupado'>". current($aFila)."</td>"; 
                        } else{
                            echo "<td class='libre'>F".(key($mTeatro)+1)."-A".(key($aFila)+1)."</td>";      // key() devuelve la clave del elemento del array. En este caso la usamos para enumerar los asientos.
                        }
                        
                    }while(next($aFila));                   // Pasamos el puntero al siguiente valor del array $aFila. En caso de no haber valor, devolverá false y saldrá del bucle.  
                echo "</tr>";
            }while(next($mTeatro));                         // Pasamos el puntero a la siguiente fila de la matriz $mTeatro. En caso de no haber valor, devolverá false y saldrá del bucle.
            echo "</table>";
        ?>
    </body>
</html>