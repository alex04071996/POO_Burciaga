<?php 
	require_once "conexion.php";
	class POO extends Conexion{
		public function crearPOO($dataModel,$tabla){
			$sql = "INSERT INTO $tabla (usuario, password, email) VALUES ('$dataModel[usuario]', '$dataModel[password]', '$dataModel[email]');";
			$sentencia= Conexion::conectar()->query($sql);
			if ($sentencia) {
				return "success";
			}else{
				return "fail";
			}
		}
	}
 ?>