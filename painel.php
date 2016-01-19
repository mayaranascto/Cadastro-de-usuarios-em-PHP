	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="css/css.css" />
	<title>Painel</title>
</head>
	<body>

		<?php
			include 'config.php';

			session_start();
			if(!isset($_SESSION["email"])  ||  !isset($_SESSION["senha"])){
				header("Location: login.php");
				exit;
			}else{
				
				echo "<p class='log'>Você está Logado!</p>";
			}
		?>

		<br/>
		<br/>
		
			<nav class="menu">
				<a href="cadastro.php" class="menuTitle">Criar Cadastro</a>
				<a href="cadastrados.php" class="menuTitle">Mostrar Cadastrados</a>
			</nav>
		
		<p class="logout"><a href="logout.php">Sair!</a></p>
		<br/>
		<br/>

		

	</body>
</html>