<?php



// array com parametros 

$aut1 = (object)["marca"=>"toyota", "modelo"=>"corolla"];
$aut2 = (object)["marca"=>"renault", "modelo"=>"speed"];



echo '<br></br>';


$collection = array (1,2,3,4,5,6);

// El constructor foreach proporciona un modo sencillo de iterar sobre arrays

foreach ($collection as $value) {
	echo $value;
}

// OTRA FORMA DE USAR FOREACH

echo '<br></br>';

foreach ($collectionS = array (1,2,3,4,5,6,7,8) as &$valueS) {
	echo $valueS;
}

echo '<br></br>';

$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
    echo $valor;

}

echo '<br></br>';

function marca($auto){
	
   echo "<p> hola soy un $auto->marca, modelo $auto->modelo</p>";

}


marca($aut1);
marca($aut2);

  ?>



