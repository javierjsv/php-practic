<?php 



// suma

$a = 15;
$b = 10;

 echo  "suma \n".($a + $b) ;

 echo '<br></br>';

  echo  "resta \n".($a - $b) ;

echo '<br></br>';
  echo  "divisor \n".($a / $b) ;

echo '<br></br>';


// residuos 
  $x = 5;
  $y = 15;

  echo 'residuio'.($x%$y);

echo '<br></br>';
// Exponenciacion 

$p = 2;
$q = 4;

var_dump($q**$p);

// experador de identidad y negacion 

// +  por -

// $y*=$c;


// ambos debes eser iguales para retorar true

$boll=(15==15) && (5==15);

$boll=(15==15) and (5==15);

// cualquiera verdader

$boll=(15==15) || (5==15);

$boll=((15==15) or (5==15));


// cualquiera de los valores es verdader

$boll=(15==15) xor (5==15);

// operador no 

$boll=!(15==15) ;


// dierente forma de usar if else 

// elseif se pone junto en php

if ($a<$b):
	echo 'a es mayor';
else:
	echo 'a es menor';
endif;

$collectiones = [
    'nombre' => 'datos' 
];


echo '<br></br>';


 ?>