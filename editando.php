<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="css/css.css" />
	<title>Editando...</title>
</head>
<body>

	<?php

		include 'config.php';
		include 'funcoes.php';

		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$pais = $_POST['pais'];
		$estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$id = $_POST['id'];

		atualizar($nome, $sobrenome, $pais, $estado, $cidade, $email, $senha, $id);

		echo "<div calss='centro'>";
		echo "<h3 class='auth'>Usuário Editado com Sucesso!</h3>";
		echo "<p class='centro'><a href='cadastrados.php'><input type='submit' value='Voltar' class='btn btn-primary btn-sm button'></a></p>";
		echo "</div>";

	?>



</body>
</html>