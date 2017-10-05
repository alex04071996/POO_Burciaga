<?php 
	require_once "conexion.php";
	class POO extends Conexion{
		public static function crearPOO($dataModel,$tabla){
			$sql = "INSERT INTO $tabla (usuario, password, email) VALUES ('$dataModel[usuario]', '$dataModel[password]', '$dataModel[email]');";
			$sentencia= Conexion::conectar()->query($sql);
			if ($sentencia) {
				return "success";
			}else{
				return "fail";
			}
			$sen->close();
		}
		public static function verProductosModel($nombre){
			$sql = "select * from $nombre;";
			$sen = Conexion::conectar()->query($sql);
			if ($sen) {
				$res = $sen->fetch_all();
				return $res;
			}else{
				return"fail";
			}
			$sen->close();
		}
		public static function borrarProductoModel($id,$tabla){
			$sql="delete from $tabla where id=$id";
			$sen = Conexion::conectar()->query($sql);
			if ($sen) {
				return "ok";
			}else{
				return "error";
			}
			$sen->close();
		}
		public static function editarProductoModel($datosModel,$tabla){
			$sql = "update $tabla set nombre='".$datosModel["nombreproducto"]."', codigo='".$datosModel["codigo"]."', precio='".$datosModel["precio"]."' where idproducto=".$datosModel["idproducto"].";";
			$sen=Conexion::conectar()->query($sql);
			if ($sen) {
				return "ok";
			}else{
				return "error";
			}
			$sen->close();
		}
		public static function agregarProductoModel($datosModel,$tabla){
			$sql = "insert into $tabla (nombre,codigo,precio) values (nombre='".$datosModel["nombreproducto"]."', codigo='".$datosModel["codigo"]."', precio='".$datosModel["precio"].");";
			$sen=Conexion::conectar()->query($sql);
			if ($sen) {
				return "ok";
			}else{
				return "error";
			}
			$sen->close();
		}
	}
 ?>