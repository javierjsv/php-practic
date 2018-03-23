<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Template</title>
    <link rel="stylesheet" type="text/css" href="views/template.css">
</head>
<body>

	<header id="header" class="header header-index">
		


    <?php 
// includ se utiliza para incluir un archivo 
        include "modules/navegacion.php";

     ?>


     <?php

 		$mvc = new MvcController();
 		$mvc -> enlacesPaginasController();

     ?>


	</header>

	
</body>
</html>