<!doctype html>
<html>
    <head>
        <title>Ejercicio 15</title>
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
                text-align: justify;
                margin-top: 10px;
                margin-bottom: 10px;
                width: 750px;
                border: 1px solid black;
                border-radius: 10px;

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
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 15</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /*
                     * @author Álvaro Allén Perlines
                     * @since 27-10-2025
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