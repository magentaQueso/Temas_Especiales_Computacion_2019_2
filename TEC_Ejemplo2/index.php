<HTML>
    <head>
        <title>Arreglos</title>
    </head>

    <body>
        <?php
        //Un arreglo guarda multiples valores en una variable. Se crean con
        //la funcion array(), tal como se muestra en la variable $arreglo.
        $arreglo = array(2, "cadena", 'c', 3.4);

        //print_r imprimira en un formato legible sobre una variable, en este
        //caso, de nuestro arreglo. 
        //La impresion de este arreglo sera:
        //[posicion_que_ocupa_en_el_arreglo] => valor
        print_r($arreglo);
        echo"<br>";
        echo"<br>";

        //Imprimira el valor que se tenga almacenado en la posicion 1 del 
        //$arreglo. 
        echo $arreglo[1];

        //Este se trata de un array multidimensional, es decir, de un array
        //que contiene en su interior otros array.
        $bidimensional = array(
            array('selene', 27),
            array('tania', 29),
        );

        //La etiqueta <pre> sirve para mostrar un segmento de texto tal y
        //como ha sido definido. En este caso, imprimira el arreglo con una
        //estructura, que sera mas estetico para su lectura. 
        echo"<pre>";
        print_r($bidimensional);
        echo"</pre>";


        //Pero para que nuestro arreglo se vea impreso de una manera mas
        //estetica, hacemos uso de HTML
        echo"<ul>"; //Damos inicio a una lista desordenada <ul>
        //Recorremos nuestro arreglo. Con count, vamos a contar todos
        //los elementos de nuestro arreglo, es decir, el for se dentendra
        //siempre y cuando $i sea menor al contendio de $bidimensional. 
        for ($i = 0; $i < count($bidimensional); $i++) {
            echo '<li>'; //inicio del elemento de nuestra lista
            //En esta impresion estamos indicando que va a imprimir
            //del arreglo bidimensiona, el valor que tenga $i y el elemnto
            //0 de $i. 
            echo $bidimensional[$i][0] . ' - ';
            echo $bidimensional[$i][1];
            echo '</li>';
        }
        echo"</ul>";



        echo"<ol>"; //Se declara una lista ordenada. 
//      Uso del foreach.
//            -Solo trabaja en arrays.
//            -Se utiliza para recorrer cada valor de la matriz
//      Para cada iteracion, el valor del array se asignara a otra variable
//      y el puntero interno del array avanzara una posicion.
//      Si observamos, la impresion del resultado sera basicamente la misma que 
//      la del ejercicio de unas lineas mas arriba. La diferencia es que en vez 
//      de indicar el valor $i que tiene que imprimir, solo asignamos el valor
//      del elemento actual a $persona y nos imprimira todo lo que deseemos de
//      ese primer elemento. Y el puntero ira avanzando, hasta terminar de
//      recorrer el arreglo. 
        foreach ($bidimensional as $persona) {
            echo '<li>';
            echo $persona[0] . ' - ';
            echo $persona[1];
            echo '</li>';
        }
        echo"</ol>";

//        En esta ocasion se le pasan como argumentos una clave y el valor de esa
//        clave:
//            array(
//                'clave_1' => 'valor_1',
//                'clave_2' => 'valor_2',
//                'clave_3' => 'valor_3'
//            )
//      
        $assoc = array(
            array('nombre' => "pedro", 'edad' => 23),
            array('nombre' => "paco", 'edad' => 28)
        );
        echo"<ol>";

//        Volvemos a hacer uso de un foreach, pero ahora como hemos utilizado claves
//        y hemos asignado valores, entonces en vez de poner la posicion en la que se
//        encuentra nuestro arreglo, usaremos la clave del valor que nos interesa traer.
//        
//        Esto es muy util, pues cuando se traten de arreglos mas largos, seria imposible
//        acordarse de todas las posiciones que nos interesa del arreglo, ademas de que
//        asi es mas facil de leer nuestro codigo. 
        foreach ($assoc as $persona) {
            echo '<li>';
            echo 'Su nombre es: ' . $persona['nombre'] . ' y su edad es: ';
            echo $persona['edad'];
            echo '</li>';
        }
        echo"</ol>";

        echo "<br>";
        echo "<br>";


//            TAREA 1
        $arreglo_tarea = array('Josue', 'Selene', 'Fabi', 'Tania', 'Avril', 'Omar', 'Daniela', 'Selene');

        foreach ($arreglo_tarea as $buscar) {
            if ($buscar === 'Fabi') {
                echo 'Su nombre es: '.$buscar;
                break;
            }
            
        }
        
        ?>
    </body>
</HTML>