<?php


class MvcController{

	// llamar a la plantilla

    public function plantilla(){
    	include "views/template.php";
        
    }

    // interacciones del usuario

    public function enlacesPaginasController (){

    	if (isset($_GET["action"])) {

    		$enlacesController = $_GET["action"];
    		
    	}
    	else {
    		$enlacesController = "index";
    	}

    	$respuesta = EnlacesPagina::enlacesPaginasModel($enlacesController);

    	include $respuesta;





    }

}

         

?>