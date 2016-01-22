<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="css/css.css" />
	<title>Removendo...</title>
</head>
	<body>
		<div class="centro">
		<?php

			include 'config.php';
			include 'funcoes.php';

			echo "<h1 class='auth'>Você tem certeza que deseja excluir o registro</h1>";
			echo "<a href='removido.php'><input type='submit' value='Sim' class='btn btn-primary btn-sm button'/></a>";
			echo " ";
			echo "<a href='cadastrados.php'><input type='submit' value='Não' class='btn btn-primary btn-sm button'/></a>";

			$id = $_GET["id"];

			delete($id);

		?>
		</div>

	</body>
</html>

