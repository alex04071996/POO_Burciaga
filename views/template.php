<html>
<head>
	<title>Plantilla</title>
</head>
<body>
	<header>
		<?php 
			require_once 'modules/navegador.php';
		?>
	</header>

	<section>
		<?php 
			
			$objetomvc = new controller();
			$objetomvc -> enlacePaginaController();
		?>
	</section>

	<footer>
		<?php 
			require_once 'modules/footer.php';
		?>
	</footer>
</body>
</html>