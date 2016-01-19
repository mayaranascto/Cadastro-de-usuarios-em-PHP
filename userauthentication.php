<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="css/css.css" />
	<title>Autenticando o usuário</title>
	<script type="text/javascript">
		function loginsuccessfully (){
			setTimeout("window.location='painel.php'", 3000);
		}

		function loginfailed(){
			setTimeout("window.location='login.php'", 3000);
		}
	</script>
</head>
	<body>

		<?php
			include 'config.php';

			$email = $_POST['email'];
			$senha = $_POST['senha'];

			$sql = mysql_query("SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
			$row = mysql_num_rows($sql);

			if($row > 0){
				session_start();
				$_SESSION['email']=$_POST['email'];
				$_SESSION['senha']=$_POST['senha'];

				echo "<h3 class='auth'>Você foi autenticado com sucesso! Aguarde, você será direcionado.</h3>";
				echo "<script>loginsuccessfully()</script>";
			}else{
				echo "Nome de usuário os senha inválidos.";
				echo "<script>loginfailed()</script>";
			}

		?>

	</body>
</html>