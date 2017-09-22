<?php 
	/**
	* 
	*/
	class controller
	{
		public function plantilla(){
			include 'views/template.php';
		}
	}
/* public function enlacePaginaController(){
			
			if (isset($_GET["action"])) {
				$enlaceController = $_GET["action"];
			}else{
				$enlaceController = "inicio";
			}
			
			$respuesta = EnlacesPaginas::enlacesPaginaModel($enlaceController);
			include $respuesta;
		}*/
 ?>
