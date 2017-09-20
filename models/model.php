<?php 
	class EnlacesPaginas{
		public function enlacesPaginasModel($enlacesModel){
			if ( $enlacesModel == "nosotros" || $enlacesModel=="contacto") {
				$module="views/modules/".$enlacesModel.".php";
			}elseif ($enlacesModel == "inicio") {
				$module="views/modules/inicio.php";
			}else{
				$module="views/modules/inicio.php";
			}
			return $enlacesModel;
		}
	}
 ?>