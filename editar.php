<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="css/css.css" />
	<title>Sistema de Cadastro</title>
</head>
<body>

	<div class="BeforeEditar">
	<div class="editar">

		<?php
			include 'config.php';

			$id = $_GET["id"];

			$sql = mysql_query("SELECT *FROM usuarios where id = '$id'");

			$linha = mysql_fetch_assoc($sql);
		?>

		<form class="form-horizontal" name="editar" method="post" action="editando.php">
			<input type="hidden" name="id" value="<?php echo $linha["id"]; ?>"/>
			<div class="form-group">
				<label class="col-sm-2 control-label labels">Nome:</label> 
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control col-sm-10" value="<?php echo $linha["nome"]; ?>" required/> </br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label labels">Sobrenome:</label> 
				<div class="col-sm-10">
					<input type="text" name="sobrenome" class="form-control col-sm-10" value="<?php echo $linha["sobrenome"]; ?>" required/> </br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label labels">País:</label> 
				<div class="col-sm-10">
					<input type="text" name="pais" class="form-control col-sm-10" value="<?php echo $linha["pais"]; ?>" required/> </br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label labels">Estado:</label> 
				<div class="col-sm-10">
					<input type="text" name="estado" class="form-control col-sm-10" value="<?php echo $linha["estado"]; ?>" required/> </br>
				</div>
			</div>		
			<div class="form-group">
				<label class="col-sm-2 control-label labels">Cidade:</label> 
				<div class="col-sm-10">
					<input type="text" name="cidade" class="form-control col-sm-10" value="<?php echo $linha["cidade"]; ?>" required/> </br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label labels">Email:</label> 
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control col-sm-10" value="<?php echo $linha["email"]; ?>" required/> </br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label labels">Senha:</label> 
				<div class="col-sm-10">
					<input type="text" name="senha" class="form-control col-sm-10" value="<?php echo $linha["senha"]; ?>" required/> </br>
				</div>
			</div>		
			
			<p><input type="submit" value="Atualizar" class="btn btn-primary btn-sm button"></br></p>
		</form>

			<a href="cadastrados.php"><input type="submit" value="Voltar" class="btn btn-primary btn-sm button"/></a>

	</div>
	</div>
	

</body>
</html>