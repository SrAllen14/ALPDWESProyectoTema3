<!doctype html>
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            /*
             * @author Álvaro Allén Perlines
             * @since 11-10-2025
             * Crea una función que cuente el número de visitas a la página actual desde una fecha concreta.
             */
        
            /*
             * Función contarVisitas la cual calculará cuantas visistas hay en esta página desde una fecha.
             * @param string $fechaInicio en formato YYYY-MM-DD a partir de la cual se contará.
             * @return int El número de visitas registradas desde la fecha de inicio.
             */
        
            function contarVisitas($fechaInicio){
                // Declaramos la variable $archivoLog la cual guardará la ruta relativa del 
                // archivo donde se guardarán las visitas.
                $archivoLog = '../tmp/visitas.log';
                
                // Obtenemos el timestamp actual.
                $timestampActual = (new DateTime())->getTimestamp();
                
                // Ahora vamos a usar el método file_put_contetnts que introduce información en archivos.
                // Usaremos los parámetros FILE_APPEND, que escribe al final del archivo evitando sobreescribir datos.
                // Y LOCK_EX que bloquea el archivo para el usuario mientras se esta escribiendo.
                file_put_contents($archivoLog, $timestampActual."\n", FILE_APPEND | LOCK_EX);
                
                // Ahora convertimos la fecha de inicio a timestamp para hacer la comparación númerica.
                $timestampInicio = (new DateTime($fechaInicio))->getTimestamp();
                
                // Obtenemos el contenido completo del archivo de log.
                $contenidoLog = @file_get_contents($archivoLog);
                
                // Si el archivo no existe o está vacio, no hay visitas que contar
                if(empty($contenidoLog)){
                    return 0;
                } 
                
                // Vamos a separar el contenido del archivo en un array donde cada elmento es un timestamp. 
                $aVisitasRegistradas = explode("\n", trim($contenidoLog));
                
                // Inicializamos el contador a 0.
                $contador = 0;
                
                foreach ($aVisitasRegistradas as $timestampVisita) {
                    // Comprobamos que es númerico y si es igual o mayor a la fecha inicial.
                    if(is_numeric($timestampVisita) && $timestampVisita >= $timestampInicio){
                        $contador++;
                    }
                }
                return $contador;
            }
            
            date_default_timezone_set('Europe/Madrid');
            $fechaCorte = '2025-10-15';
            
            $totalVisitas = contarVisitas($fechaCorte);
            
            echo "Numero total de visitas: ".$totalVisitas;
            
            
            
        ?>
    </body>
</html>