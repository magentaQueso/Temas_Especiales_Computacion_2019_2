<!-- FUNCIONES -->
<?php
    $a = 3;
    $b = 4;
    
// Cualquier código PHP válido puede
// aparecer dentro de una función, incluso otras funciones o clases. 
// Los nombres de las funciones, deben de cumplir con las siguientes
// características:
//     *El nombre debe comenzar con una letra o guión bajo, seguido
//     de letras, números o guiones bajos. 
//     *Debe ser descriptivo, es decir, debe indicar lo más que se
//     pueda la acción que realiza la funcion. 
    echo "Resultado función sin argumento. <br/>";
    function sumar(){ //Declaro la función. No tiene argumentos
        echo (5+6);   //Acción que realiza la función; en este caso, una suma
    }
    sumar(); //Se manda a llamar la función.

    echo"<br/>";
    
// La información puede ser pasada a las funciones por medio de argumentos. 
// Los argumentos son como una variable y serán especificados dentro de los
// paréntesis. Se pueden tener tantos argumentos como se necesiten y deben 
// ir separados por comas. 

    echo "Resultado función con argumento. <br/>";
    function sumar1($variable){ //Se declara la funcion suma1. El argumento es $variable   
        //Se va a imprimir la suma de $variable + 6. El valor de variable dependerá
        //del que se le pase cuando se llame la función. 
        echo ($variable + 6);
    }    

    //Se manda a llamar a la función y se le paso el valor del argumento, que será 7.
    //La suma que realizará la función será 7+6
    sumar1(7);

    echo"<br/>";
    
    //Argumentos predeterminados en una función. SIEMPRE deben de ir a la derecha de
    //los argumentos que no son predeterminados (obligatorios), de lo contrario, 
    // habrá un error.  
    //En este caso, $parametro1 es el parámetro obligatorio y $parametro2 será el no
    //predeterminado, al cual se le da el valor de 1. 
    function sumar2($parametro1, $parametro2 = 1){
        echo($parametro1 + $parametro2);        
    }
    
    echo "Suma entre un parámetro predeterminado y otro que no lo está:<br/>";
    sumar2($b);
    echo "<br/>";
    //Esta es la suma de una función que tiene un parámetro predeterminado y otro no,
    // pero se le pasan 2 parámetros cuando se llama a la función
    echo "Suma que se le pasan dos parámetros cuando se llama a la función: <br/>";
    sumar2 ($a,$b);
    echo "<br/>";


//   Los valores son devueltos usando la sentencia return. Se pueden
//retornar cualquier tipo, incluidos arrays y objetos. La función
//finaliza su ejeción inmediatamente y pasa el control de nuevoa la
//línea de código en la que fue llamada. 
    function sumar3($parametro1, $parametro2 = 1){
        return($parametro1 + $parametro2);        
    }
echo "Sumas utilizando return.";
echo "<br/>";
    echo sumar3($a);
    echo "<br/>";
    $c = sumar3($a,$b);
    echo $c;
    echo "<br/>";

    // Ahora bien, las funciones pueden modificar variables que han sido 
    // declaradas con anterioridad y almacenar estas modificaciones. En este
    // caso, tenemos la variable $a que almacena 3 como valor.
    //Sin embargo, aunque se ha aplicado la función a la variable a, esta no
    //permanecera con el cambio y para la siguiente vez que volvamos a hacer 
    // uso de ella, volverá a tener su valor original.
    
    echo "Impresión de a, antes de pasar la función: ".$a."<br/>";
    function aumentar($param){
        return($param + 1);
    }
    //La pasamos por la función. El resultado que debemos obtener es 4.  
    echo "Resultado de una función que modifica a la variable: ". aumentar($a);
    echo "<br/>";
    echo "Volvermos a imprimir a y vemos que su valor es nuevamente 3: ".$a;

    
//Recibir el puntero (o referencia).   
//Referencias en PHP son medios de acceder al mismo contenido de una variable
// mediante diferentes nombres. 
//En este caso, pasamos una variable por referencia. 
//Se define una variable local en una función y una variable fuera de la función. 
//En este caso, trabajamos con a, que fue declarada muy al principio de nuestro 
//código. 
//La función aumentar2 recibirá el puntero &$param.
    function aumentar2(&$param){
        //$param aumentara en 1 y se imprimirá
        $param++;
        echo $param;
    }

    //A aumentar2 le pasamos la variable a como argunemto. 
    echo "<br/> Resultado función con un puntero: ";
    aumentar2($a);
    echo"<br/>";
    //Ahora la variable $a podrá imprimirse y estar recibiendo el proceso de la función. 
    echo $a;
    
    ?>
