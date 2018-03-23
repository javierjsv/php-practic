<?php


// se debe poner obligatoriamente la sintaxis function

// funcion sin parametros

function eje()
{
	
	echo 'hola mundo <br>';
}

// forma de llamar la funcion

eje();



// funcion con parametros

function adios($chao)
{

	echo   $chao."<br>";
	
}


// forma de llamar la funcion 

adios('bye');


// funciones con retorno

function retorno ($retornar)
{
	return $retornar;
	
}

// forma de llamar a la funcion con retorno

echo retorno('retornando <br>');


// se puede poner una funion dentro de un if
// se puede poner una funcion dentro de una funcion







?>