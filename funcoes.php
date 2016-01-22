<?php

	include 'config.php';

	function adcionar($nome, $sobrenome, $pais, $estado, $cidade, $email, $senha){
		$sql = "INSERT INTO usuarios (nome, sobrenome, pais, estado, cidade, email, senha) 
				VALUES('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')";
		mysql_query($sql);
	}

	function atualizar($nome, $sobrenome, $pais, $estado, $cidade, $email, $senha, $id){
		$sql = "UPDATE usuarios SET nome='$nome', sobrenome='$sobrenome', pais='$pais', estado='$estado', cidade='$cidade', email='$email', senha='$senha'
				WHERE id='$id'";
		//var_dump($sql);
		//die();
		mysql_query($sql);
	}

	function delete($id){
		$sql = "DELETE FROM usuarios WHERE id = '$id'";
		//var_dump($sql);
		//die();
		mysql_query($sql);
	}

	function mostrar(){
		$sql = "SELECT nome, sobrenome, pais, estado, cidade, email FROM usuarios";
		mysql_query($sql);
		mysql_fetch_assoc($sql);
	}

?>