<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="css/css.css" />
	<title>Sistema de Autenticação</title>
</head>
<body>
	<div class="container-fluid">
		<div class="beforeLogin">
		<h2 class="saudacoes">Bem Vindo! Faça Login Aqui.</h2>
		<div class="login">
			<form class="form-horizontal" name="loginForm" method="post" action="userauthentication.php">
				<div class="form-group">
					<label class="col-sm-2 control-label labels">Email:</label> 
					<div class="col-sm-10">
						<input type="text" name="email" class="form-control col-sm-10" placeholder="Digite o Email"/> </br>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label labels">Senha:</label>
					<div class="col-sm-10">
						<input type="password" name="senha" class="form-control" placeholder="Digite a Senha"/> </br>
					</div>	
				</div>
				<input type="submit" value="Login" class="btn btn-primary btn-sm button"/>
			</form>
		</div>
		</div>
	</div>

</body>
</html>