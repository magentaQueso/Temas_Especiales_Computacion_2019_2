<html>
    <body>
        <?php
            //Declaracion de variables. 
            $variable = "hola ";
            //Impresion de variables
            echo $variable;
            $variable2 ="mundo";
            echo $variable2;
            
            //Se declara un contador. 
            for ($i = 1; $i < 5; $i++){
//              Se va imprimiendo cada valor que vaya teniendo i. Pero se imprime con
//              HTML intermedio. En este caso, estamos dando una etiqueta h el valor
//              que tenga i. Es decir, para la primera i, la etiqueta h valdra 1 <h1>,
//              se concatena con lo que valga la variable i con un . 
//              Asi pues, en php se puede combinar HTML con php, siempre y cuando el 
//              0elemento HTML vaya entre comillas dobles
                echo "<h".$i.">".$i."</h".$i.">\n";   
            }
        
        ?>
    </body>
    
</html>