<?php 
	class EnlacesPaginas{
		public static function enlacesPaginasModel($enlacesModel){
			if ( $enlacesModel == "nosotros" || $enlacesModel=="contacto" || $enlacesModel=="agregarproducto" ||$enlacesModel=="ver") {
				$module="views/modules/".$enlacesModel.".php";
			}elseif ($enlacesModel == "inicio") {
				$module="views/modules/inicio.php";
			}else{
				$module="views/modules/inicio.php";
			}
			return $module;
		}
	}
 ?>