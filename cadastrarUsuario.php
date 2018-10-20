<?php 

    require('conexao.php');
     
    	try{
			
			session_start();
				$nome = $_POST["nome"];
				$_SESSION["nome"] = $nome;
				$email =$_POST["email"];
				$_SESSION["email"] = $email;
				$senha = $_POST["senha"];
				$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
				$tipoUsuario = $_POST["tipoUsuario"];

			$stmt = $conexao->prepare("insert into usuario (nome_completo, email, senha, tipo_usu) values ('$nome', '$email','$senhaCriptografada','$tipoUsuario')");
			
				
				$stmt->bindValue(1, $nome);
				$stmt->bindValue(2, $email);
				$stmt->bindValue(3, $senhaCriptografada);
				$stmt->bindValue(4, $tipoUsuario);
				
				//var_dump($stmt);
				$stmt->execute();

				 header("Location: index.php");
	}catch(PDOException $e){
			echo $e->getMessage();
		} 


?>