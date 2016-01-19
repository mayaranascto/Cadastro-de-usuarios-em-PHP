<?php
	include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="css/css.css" />
	<title>Exibição de Usuários</title>
</head>
	<body>

		<div class="BeforeListar">
			<div class="listar">

				<?php
					$sql = "SELECT *FROM usuarios";
					$query = mysql_query($sql);
					$row = mysql_num_rows($query);
					if ($row > 0) {
						while ($linha = mysql_fetch_array($query)) {
							$nome = $linha['nome'];
							$sobrenome = $linha['sobrenome'];
						
							echo "<p class='lista'>Nome: $nome";
							echo "<br/>";
							echo "Sobrenome: $sobrenome";
							echo "<br/>";
							echo "<a href='editar.php?&id=".$linha['id']."'><input type='submit' value='Editar' class='btn btn-primary btn-sm button'></a>";
							echo " ";
							echo "<a href='remover.php?&id=".$linha['id']."'><input type='submit' value='Remover' class='btn btn-primary btn-sm button'></a>";
							echo "<br/><br/><hr/></p>";
			
						}
					}else{
						echo "Não existe registros";
					}
				?>

				<a href="painel.php"><input type="submit" value="Voltar" class="btn btn-primary btn-sm button"/></a>

			</div>
		</div>

	</body>
</html>