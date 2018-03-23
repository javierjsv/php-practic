<?php

// una clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad.


class Automovil
{

	public $maca;
	public $modelo;

    public function mostrar()
    {
        // echo "<p>Hola! soy un $this-> marca,modelo $this->modelo </p>";
    }
}



// objetos

#Una entidad provista de métodos o mensajes a los cuales responde propiedades con valores concretos 


$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "corolla";
$a -> mostrar();


$b = new Automovil();
$b -> marca = "Renault";
$b -> modelo = "maxtlla";
$b -> mostrar();


$prueba = 'hola';

$xarray = array (1,"dos",$prueba);

// recorrer un array y traer valores

for ($i=0;$i<count($xarray);$i++) {
	echo $xarray[$i]."<br>";
}





?>