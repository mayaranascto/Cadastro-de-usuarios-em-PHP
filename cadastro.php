<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="css/css.css" />
	<title>Sistema de Cadastro</title>
</head>
<body>
	<div class="container-fluid">
	<div class="BeforeCadastro">
		<div class="cadastro">
			<form class="form-horizontal" name="singup" method="post" action="cadastrando.php">
				
				<div class="form-group">
					<label class="col-sm-2 control-label labels">Nome:</label> 
					<div class="col-sm-10">
						<input type="text" name="nome" class="form-control col-sm-10" placeholder="Digite o nome" required/> </br>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label labels">Sobrenome:</label> 
					<div class="col-sm-10">
						<input type="text" name="sobrenome" class="form-control col-sm-10" placeholder="Digite o sobrenome" required/> </br>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label labels">País:</label> 
					<div class="col-sm-10">
						<input type="text" name="pais" class="form-control col-sm-10" placeholder="Digite o país" required/> </br>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label labels">Estado:</label> 
					<div class="col-sm-10">
						<input type="text" name="estado" class="form-control col-sm-10" placeholder="Digite o estado" required/> </br>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label labels">Cidade:</label> 
					<div class="col-sm-10">
						<input type="text" name="cidade" class="form-control col-sm-10" placeholder="Digite o cidade" required/> </br>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label labels">Email:</label> 
					<div class="col-sm-10">
						<input type="text" name="email" class="form-control col-sm-10" placeholder="Digite o email" required/> </br>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label labels">Senha:</label> 
					<div class="col-sm-10">
						<input type="password" name="senha" class="form-control col-sm-10" placeholder="Digite a senha" required/> </br>
					</div>
				</div>

				<p><input type="submit" value="Finalizar Cadastro" class="btn btn-primary btn-sm button"></br></p>
			</form>

			<a href="painel.php"><input type="submit" value="Voltar" class="btn btn-primary btn-sm button"></a>
		</div>
	</div>
	</div>	

</body>
</html>