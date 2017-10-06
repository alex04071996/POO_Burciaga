<?php
	require_once 'models/conexion.php';
	
	$sql = "CREATE TABLE IF NOT EXISTS productos(
			id	int(255) auto_increment not null,
			nombre		varchar(50),
			precio      varchar(50),
			codigo varchar(50),
			CONSTRAINT pk_usuario PRIMARY KEY(id));";
	
	$on= conexion::conectar()->query($sql);
	
	$sql="INSERT INTO productos VALUES (NULL, 'manzana', '10' ";
	mysqli_query($con, $sql);
	$sql="INSERT INTO productos VALUES (NULL, 'naranja', '15' ";
	mysqli_query($con, $sql);
    $sql="INSERT INTO productos VALUES (NULL, 'galletas', '30' ";
	mysqli_query($con, $sql);
    $sql="INSERT INTO productos VALUES (NULL, 'refrsco', '20' ";
	mysqli_query($con, $sql);
	
	if($create_productos_table){
		echo "La Tabla de productos se ha creado correctamente";
	}else{
		echo mysqli_errno($con)." ".  mysqli_error($con);
	}	
?>