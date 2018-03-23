<?php

// condiciones 

$a = 5;
$b = 10;


if ($a < $b) {
	echo 'b es mayor a';
	
}

elseif ($a == $b) {
	echo 'a y b son iguales';
	
}
else {
	echo ' a es mayor a b ';
}


// salto de linea

echo '<br></br>';

// suiches

$semana = 'dia';


switch ($semana) {
	case 'dia':
		echo 'estudiando ando ';
		break;
	
	case 'hoy':
		echo 'trabajando';

		break;


	default:
		echo 'relax';
		break;
}


// salto de linea

echo '<br></br>';


// ciclo while

$a = 1;

while ($a <= 5) {
	echo $a;
	$a ++;    
}

echo '<br></br>';



// do while

$c = 1;

do{
	echo $c;
	$c++;
}while ($c <=6);
    

echo '<br></br>';

// ciclo for 

for ($i = 0; $i <= 5 ; $i++) {

	echo $i;
	
}



 ?>