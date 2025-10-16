<!doctype html>
<html>
    <head>
        <title>Ejercicio 15</title>
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
            $iCantidadTotal = 0;
            
            // Declaramos el array aSueldoSemanal y lo inicializamos con 
            // key = día de la semana y value = salario de ese día.
            $aSueldoSemanal = ['lunes' => 43, 'martes' => 20,
                               'miercoles' => 50, 'jueves' =>30,
                               'viernes' => 25, 'sabado' =>104,
                               'domingo' => 0];
            
            // Para mostrar el salario diario contenido en el array debemos recorrerlo con un foreach.
            echo 'El salario diario es: <br>';
            foreach ($aSueldoSemanal as $dia => $cantidad) {
                // Primero acumulamos en la variable iCantidadTotal la cantidad de cada día.
                $iCantidadTotal += $cantidad;
                // Mostramos cada uno de los días de la semana junto con su valor.
                printf('El ' . $dia . ' cobraste: ' . $cantidad . '<br>');
            }
            
            echo '<br>';
            // Para mostrar el salario total usamos el acumulador iCantidadTotal.
            printf('La cantidad semanal ha sido: ' . $iCantidadTotal);
        ?>
    </body>
</html>