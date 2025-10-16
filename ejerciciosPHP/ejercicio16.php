<!doctype html>
<html>
    <head>
        <title>Ejercicio 16</title>
    </head>
    <body>
        <?php
            /*
             * @author Álvaro Allén Perlines
             * @since 16-10-2025
             * Array con el sueldo de cada día de la semana y el sueldo total.
             */
        
            // Declaramos la variable iCantidadTotal de tipo entero y la inicializamos a cero.
            // Esta variable va a acumular la cantidad total del sueldo semanal.
            $iCantidad = 0;
            
            // Declaramos el array aSueldoSemanal y lo inicializamos con 
            // key = día de la semana y value = salario de ese día.
            $aSueldoSemanal = ['lunes' => 43, 'martes' => 20,
                               'miercoles' => 50, 'jueves' =>30,
                               'viernes' => 25, 'sabado' =>104,
                               'domingo' => 0];
            
            // El cambio que hay que realizar es introducir este foreach dentro de una función.
            // Dicha función va a recibir el array como parámetro y va a retornar el total de dinero ganado.
            function acumularSueldo($aSueldoSemanal){
                $iCantidadTotal = 0;
                foreach ($aSueldoSemanal as $dia => $cantidad) {
                    // Acumulamos en la variable iCantidadTotal la cantidad de cada día.
                    $iCantidadTotal += $cantidad;
                }
                // Retornamos la cantidad total de dinero ganado.
                return $iCantidadTotal;  
            }
            
            // A mayores, vamos a crear otra función para mostrar la cantidad de dinero ganado por día.
            
            function mostrarSueldos($aSueldoSemanal){
                foreach ($aSueldoSemanal as $dia => $cantidad) {
                    // Mostramos cada uno de los días de la semana junto con su valor.
                    printf('El ' . $dia . ' cobraste: ' . $cantidad . '<br>');
                }
            }
            
            // Para mostrar el salario diario contenido en el array debemos recorrerlo con un foreach.
            // Vamos a aprovechar que hemos hecho ambas funciones para mostrarlo todo en el mismo printf
            echo 'El salario diario es: <br>';

            printf(mostrarSueldos($aSueldoSemanal).'La cantidad semanal ha sido: ' . acumularSueldo($aSueldoSemanal));
        ?>
    </body>
</html>