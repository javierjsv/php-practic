<?php 


class EnlacesPagina {

	    public  function EnlacesPaginasModel($enlacesModel){

	   		if ($enlacesModel =="nosotros" || $enlacesModel =="servicios"  || $enlacesModel == "contactenos"){

	 		$module = "views/modules/".$enlacesModel.".php";
	 	}

	 	elseif ($enlacesModel == "index") {

	 		$module = "views/modules/inicio.php";
	 		
	 	}else{

	 		// lista blanca se hace para restringir al usurio de escrbibir en la URL

	 		$module = "views/modules/inicio.php";
	 	}

	        return $module;

	    }
	}

 ?>

