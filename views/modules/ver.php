<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre producto</th>
			<th>Precio</th>
			<th>Editar/Eliminar</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$registro = new controller();
			$registro->verProductosController();
			$registro->borrarProductoController();

		 ?>
	</tbody>
</table>