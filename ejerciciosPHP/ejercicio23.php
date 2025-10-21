<!doctype html>
<html>
    <head>
        <title>Ejercicio 23</title>
    </head>
    <body>
        <?php
            /*
             * @author Álvaro Allén Perlines
             * @since 21-10-2025
             * Formulario realizado por una persona. Mostrar las respuestas en la misma página.
             * En caso de haber introducido un valor incorrecto en algún campo, mostrar mensaje 
             * de error en el lugar del error.
             */
            
        
        
            // Declaramos e inicializamos las variables.
            // En este caso es un array con clave igual al tipo de respuesta y el value igual al valor de dicha respuesta.
            $aRespuesta = ["name"=>"null", "age"=>null];
            
            // isset() comprueba que se ha dado al botón de enviar. 
            // True: nos muestra las respuestas enviadas en los campos.
            // False: nos muestra el contenido del formulario.
            if(isset($_REQUEST["enviar"])){
                // Comprobamos que el campo "name" no está vacio.
                // True: asignamos el valor del campo al array con la clave correspondiente.
                // False: mostramos al lado del campo un mensaje de error.
                if(!empty($_REQUEST["name"])){
                    // Le damos el valor a cada uno de los campos con el valor obtenido del formulario.
                    $aRespuesta["name"] = $_REQUEST['name'];
                } else{
                    echo "Campo vacio<br>";
                }
                
                // Comprobamos que el campo "age" devuelve un número entre 0 y 100 ambos incluidos.
                // True: asignamos el valr del campo al array con la clave correspondiente.
                // False: mostramos al lado del campo un mensaje de error.
                if($_REQUEST["age"] >= 0 && $_REQUEST["age"] <= 100){
                    // Le damos el valor a cada uno de los campos con el valor obtenido del formulario.
                    $aRespuesta["age"] = $_REQUEST['age'];
                } else{
                    echo "Valor incorrecto<br>";
                }
                
                echo "El nombre es: ".$aRespuesta["name"]."<br>";
                echo "La edad es: ".$aRespuesta["age"]."<br>";
            } else{
        ?>
        <form action="<?php $_SERVER["PHP_SELF"]  //Aprovechamos que $_SERVER guarda el nombre del archivo actual.?>" method="post">
            <fieldset>
                <legend>Formulario básico</legend>
                <label for='name'>Nombre:</label>
                <input name="name" type="text" id='name' placeholder="Nombre...">
                <br>
                <label for='age'>Edad:</label>
                <input name="age" type='number' id="age">
                <br>
                <input type="submit" name="enviar" value="Enviar">
            </fieldset>
        </form>
        <?php
            }
        ?>
    </body>
</html>