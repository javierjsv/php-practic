<?php 


// operadores de comparación.


// operador ==

 $num1 = 14;
 $num2 = "38";


echo "operador == \n {$num1} != \n {$num2} ";

// var_dump trae valor y tipo
var_dump($num1==$num2);


// operador === indetico en tipo de datos y valor



// operador diferente !=  o <>  (<>) difente


// operdor no identico !==  que no tengan el mismo tipo y diferente valor 


// operador de nave espacial nuew 7

echo ' <br>operdor de nave espacial <=>';

var_dump($num1<=>$num2); //-1
var_dump($num2<=>$num1);//1
var_dump($num1<=>$num1);//0


// operador elvis

$resultado = false;
echo ' <br>operdor de elvis = $resultado ? : no hay datos <br> ';
var_dump($resultado ? : 'no hay datos');
// donde resultado es verdadero y ' no hay datos ' es falso



// operdor ternario

$resultados = false;
echo " <br>operdor de elvis : \n ";
var_dump($resultados ?'hay datos ': 'no hay datos');


// isset trae valores


// operdaor de funcion null si no guradamos valor da error
$operdorNull = null;
echo 'operdor con funcion null <br>';
var_dump($operdorNull ?? 'no hay datos');



 ?>