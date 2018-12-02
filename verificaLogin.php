<?php

  $login = $_POST["login"];
  $senha = $_POST["senha"];

  try{
	require('conexao.php');
	$stmt =$conexao->prepare("select nome_completo,email, senha from Aluno where email = ? ");
	$stmt->bindParam(1, $login);
	$stmt->execute();	
	$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	foreach($resultado as $linha){
	
		if(password_verify($senha, $linha["senha"])){
			
			session_start();
			$_SESSION["id"]=$id;
			$_SESSION["login"]=$login;
			$_SESSION["email"]=$linha["email"];
			$linha["nome_completo"] = $_SESSION["nome"];
			header("Location: index.php");

		}else{
			
			$senhaIncorreta = "Email ou senha incorretos!";
			header("Location: index.php");
			
		}
	}
	}	catch(PDOException $e){
		echo $e->getMessage();
	}
?>