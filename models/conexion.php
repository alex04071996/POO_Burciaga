<?php 
	error_reporting(0);
	class Conexion{
		#metodo para crear conexion
		public static function conectar(){
			$con = new mysqli('localhost', 'root', '', 'POO');
			if ($con->connect_errno) {
				echo "La conexion a la base de datos no se pudo realizar, por favor contacte a su administrador.";
				return "fail";
			}else{
				echo "esta bien";
				return $con;
			}
		}
	}
?>