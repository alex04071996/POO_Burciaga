<?php 
	/**
	* 
	*/
	class controller
	{
		public static function plantilla(){
			include 'views/template.php';
		}
		public static function agregarProducto(){

		}
		public  static function linkPageController(){
			if(isset($_GET["action"])){
				$linkController = $_GET["action"];
			}else{
				$linkController = "login";
			}
			$answer = EnlacesPaginas::enlacesPaginasModel($linkController);
			include $answer;
		}
		public static function verProductosControler(){
			$res = POO::verProductosModel("productos");
			foreach ($res as $row => $item) {
				echo '<tr>
							<td>'.$item[0].'</td>
							<td>'.$item[1].'</td>
							<td>'.$item[2].'</td>
							<td><a href="index.php?action=editar&id='.$item[0].'"><span class="glyphicon glyphicon-pencil"></a>
							<a href="index.php?action=ver&id_borrar='.$item[0].'"><span class="glyphicon glyphicon-remove"></a></td></tr>';
			}
		}
		public static function borrarProductoController(){
			if (isset($_GET["id_borrar"])) {
				$id=$_GET["id_borrar"];
				$res = POO::borrarProductoModel($id,"productos");
				if ($res== "ok") {
					header("location:index.php?action=ver");
				}else{
					echo "Error";
				}
			}
		}
	}
 ?>
