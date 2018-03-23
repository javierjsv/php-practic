
 <?php
 $nombre = "javier";
 $numero = 7 ;
  echo  "$nombre <br>","$numero <br>";

// traer el type of data 

  echo   gettype( $numero);


// la contante no cambia ssu valor 
	define('PI', 3.14);
	echo "PI <br>" ;

 // var boolean

	$verdadera = true;

	echo  "verdadera : $verdadera <br>";

  // otra forma de contactenar




  // var_dump() muestra el tipo de dato de la variable
  var_dump($verdadera);


	$varFalse = false;
	echo '<br>false' . $varFalse;





// var arreglo

  $varArray = array(1,2,3,5);
  echo ' <br>esta es un array'. $varArray[1];



  // var arregle con datos

  $arrayDatos = array(1=>'uno',2=>'dos', 3=>'tres');

  echo '<br>esto es un array con valores <b>'. 
  $arrayDatos[1];
?>