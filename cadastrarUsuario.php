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
				$cpf = $_POST["cpf"];
				$dataNasc = $_POST["dataNasc"];
				$dataP = explode('/', $dataNasc);
				$dataNoFormatoParaOBanco = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];
				// $tipoUsuario = $_POST["tipoUsuario"];

			$stmt = $conexao->prepare("insert into Aluno (nome_completo, cpf, data_nascimento, email, senha) values ('$nome','$cpf','$dataNoFormatoParaOBanco', '$email','$senhaCriptografada')");
			
				
				$stmt->bindValue(1, $nome);
				$stmt->bindValue(2, $cpf);
				$stmt->bindValue(3, $dataNoFormatoParaOBanco);
				$stmt->bindValue(4, $email);
				$stmt->bindValue(5, $senhaCriptografada);
				
				//var_dump($stmt);
				$stmt->execute();

				 header("Location: index.php");
	}catch(PDOException $e){
			echo $e->getMessage();
		} 


?>