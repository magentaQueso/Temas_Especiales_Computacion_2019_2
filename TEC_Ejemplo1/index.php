<html>
    <head>
        
    </head>
    <body>
        <?php
        
        //Declaracion de variables. Las variables hacen distincion entre mayusculas
        //y minusculas.
        $variable_a = 3;
        $variable_b = 5;
        
        //Las variables tambien pueden hacer comparacion de valor y de tipo. Si requerimos que
        //la validacion sea si se trata de una variable que no necesariamente sea del mismo tipo
        //entonces utilizamos == Si se requiere que sea del mismo valor y del mismo tipo, entonces
        //utilizamos ===
        if($variable_b === "5"){
            echo"Reprobados";
        }else{
            echo"No Reprobado";
        }
        echo "<br>";
        echo "<br>";
        
        //Operadores ternarios. Se encuentran compuestos de la siguiente manera: 
        //expresion1 ? expresion2 : expresion3
        //Donde se evalua primero la expresion1. Si la expresion 1 es verdadera,
        //entonces devuelve como resultado la expresion2. Si es falsa, entonces
        //devolvera como resultado la expresion3.
        //En este caso, se esta realizando la evaluacion de la variable_b, si se 
        //trata que su valor almacenado es menor o igual (<=) que 5, entonces
        //dara el valor "reprobado" 
        echo($variable_b <= 5) ? "reprobado" : "no reprobado";
        
        echo "<br>";
        echo "<br>";
        
        //Similar a una serie de sentencias if. 
        //switch(variable_a_evaluar){
        //  case 'etiqueta_1':
        //  codigo que se ejecutara si variable_a_evaluar = etiqueta_1
        //  break;
        //}
        switch($variable_a){
            case '1':
                echo"uno";
                break;
            case '2':
                echo "dos";
                break;
            case '3':
                echo "No es";
                break;
            case '4':
                echo "bien";
                break;
        }
        
        echo "<br>";
        echo "<br>";
        
        //Impresion de una matriz por medio de una tabla.
        echo"<table>";
                for($i = 0; $i < $variable_a; $i++){ //renglones
                echo"<tr>";
                    for($j = 0; $j < $variable_b; $j++){   //columnas
                        echo "<td>";
                            echo $i.$j;
                        echo "</td>";
                    }
                echo"</tr>";
                }       
        echo"</table>";
        ?>
    </body>
</html>