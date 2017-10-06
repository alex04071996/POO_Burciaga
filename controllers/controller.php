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
			if (isset($_POST["AgregarProducto"])) {
				$datosController= array("nombreproducto"=>$_POST["nombreproducto"],"codigo"=>$_POST["codigoproducto"],"precio"=>$_POST["precioproducto"]);
				$res = POO::agregarProductoModel($datosController,"productos");
				if ($res=="ok") {
					echo '<script language="javascript">alert("Producto agregado correctamente.");</script>';
					header("location:index.php?action=ver");
				}else{
					echo '<script language="javascript">alert("Error al intentar registrar, intente de nuevo o consulte a su administrador.");</script>';
				}
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
		public static function verProductosController(){
			$res = POO::verProductosModel("productos");
			if ($res=="fail") {
				echo "No hay datos existentes dentro de la base.";
			}else{
				foreach ($res as $row => $item) {
					echo '<tr>
								<td>'.$item[0].'</td>
								<td>'.$item[1].'</td>
								<td>'.$item[2].'</td>
								<td><a href="index.php?action=editarproducto&id_editar='.$item[0].'"><span class="glyphicon glyphicon-pencil"></a>
								<a href="index.php?action=ver&id_borrar='.$item[0].'"><span class="glyphicon glyphicon-remove"></a></td>
						</tr>';
						//echo $row[2];
				}
			}
		}
		public static function borrarProductoController(){
			if (isset($_GET["id_borrar"])) {
				$id=$_GET["id_borrar"];
				$res = POO::borrarProductoModel($id,"productos");
				if ($res== "ok") {
					header("location:index.php?action=ver");
				}else{
					echo '<script language="javascript">alert("Error, no se pudo eliminar el producto, intente de nuevo o consulte a su administrador.");</script>';
				}
			}
		}
		public static function editarProductoController(){
			if (isset($_GET["id_editar"])) {
				$id = $_GET["id_editar"];
				$res = POO::editarProductoModel($id,"productos");
				foreach ($res as $key => $item) {
					echo '<div class="container">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<form method="POST" name="EditarProducto">
									<label>Nombre del producto:</label>
									<input type="hidden" name="idproducto" value="'.$item[0].'">
									<input type="text" name="nombreproducto" class="form-control" value="'.$item[1].'">
									<label>Precio:</label>
									<input type="number" name="precioproducto" class="form-control" value="'.$item[2].'">
									<label>Codigo de barras:</label>
									<input type="number" name="codigoproducto" class="form-control" value="'.$item[3].'"><br>
									<a href="index.php?action=edicionproducto&id_producto='.$item[0].'" class="btn btn-default">Aceptar</a>
									<a href="index.php?action=lista" class="btn btn-default">Regresar</a>
								</form>
							</div>
						</div>';
				}
			}
		}
		public static function edicionProductoController(){
			if (isset($_GET["id_producto"])) {
				$datosController= array("idproducto"=>$_GET["id_producto"],"nombreproducto"=>$_POST["nombreproducto"],"codigo"=>$_POST["codigoproducto"],"precio"=>$_POST["precioproducto"]);
				$res = POO::edicionProductoModel($datosController,"productos");
				if ($res=="ok") {
					echo '<script language="javascript">alert("Producto editado correctamente.");</script>';
					header("location:index.php?action=ver");
				}else{
					echo '<script language="javascript">alert("Eror al intentar editar, intente de nuevo o consulte a su administrador.");</script>';
				}
			}else{
				echo "No se elijio un articulo para su edicion.";
			}
			
		}
	}
 ?>
