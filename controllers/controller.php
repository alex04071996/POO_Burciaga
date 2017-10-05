<?php 
	/**
	* 
	*/
	class controller
	{
		public static function plantilla(){
			include 'views/template.php';
		}
		public static function agregarProductoController(){
			$datosController= array("nombreproducto"=>$_POST["nombreproducto"],"codigo"=>$_POST["codigoproducto"],"precio"=>$_POST["precioproducto"]);
			$res = POO::agregarProductoModel($datosController,"productos");
			if ($res=="ok") {
				alert("Producto agregado correctamente.");
				header("location:index.php?action=ver");
			}else{
				alert("Error al intentar registrar, intente de nuevo o consulte a su administrador.");
			}
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
							<td><a href="index.php?action=editarproducto&id_editar='.$item[0].'"><span class="glyphicon glyphicon-pencil"></a>
							<a href="index.php?action=ver&id_borrar='.$item[0].'"><span class="glyphicon glyphicon-remove"></a></td>
					</tr>';
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
		public static function editarProductoController(){
			if (isset($_GET["id_editar"])) {
				$id = $_GET["id_editar"];
				$res = POO::editarProductoModel($id,"productos");
				if ($res=="ok") {
					echo '<div class="container">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<form method="POST" name="EditarProducto">
									<label>Nombre del producto:</label>
									<input type="hide" name="idproducto" value="'.$res[0].'>"
									<input type="text" name="nombreproducto" class="form-control" value="'.$res[1].'">
									<label>Precio:</label>
									<input type="number" name="precioproducto" class="form-control" value="'.$res[2].'">
									<label>Codigo de barras:</label>
									<input type="number" name="codigoproducto" class="form-control" value="'.$res[3].'"><br>
									<button type="submit" name="EditarProducto" class="btn btn-default">Aceptar</button>
									<a href="index.php?action=lista" class="btn btn-default">Regresar</a>
								</form>
							</div>
						</div>';
				}else{
					echo "Error";
				}
			}
		}
		public static function edicionProductoController(){
			$datosController= array("idproducto"=>$_POST["idproducto"],"nombreproducto"=>$_POST["nombreproducto"],"codigo"=>$_POST["codigoproducto"],"precio"=>$_POST["precioproducto"]);
			$res = POO::agregarProductoModel($datosController,"productos");
			if ($res=="ok") {
				alert("Producto agregado correctamente.");
				header("location:index.php?action=ver");
			}else{
				alert("Error al intentar registrar, intente de nuevo o consulte a su administrador.");
			}
		}
	}
 ?>
