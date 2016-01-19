<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="css/css.css" />
		<title>Cadastrando...</title>
	</head>
	<body>
		<div class="centro">
			<?php
				include 'config.php';
				include 'funcoes.php';

				$nome=$_POST['nome'];
				$sobrenome=$_POST['sobrenome'];
				$pais=$_POST['pais'];
				$estado=$_POST['estado'];
				$cidade=$_POST['cidade'];
				$email=$_POST['email'];
				$senha=$_POST['senha'];
				
				adcionar($_REQUEST['nome'], $_REQUEST['sobrenome'], $_REQUEST['pais'], $_REQUEST['estado'], $_REQUEST['cidade'], $_REQUEST['email'], $_REQUEST['senha']);

				echo ("<h3 class='auth'>Cadastro Efetuado com Sucesso!</h3>");

			?>
			<a href="cadastro.php"><input type="button" value="Voltar" class="btn btn-primary btn-sm button"/></a>
		</div>
	</body>
</html>