<?php

session_start();
 require('conexao.php');
     
    	try{

    			$id = $_POST["idUsuario"];
    			$senhaAntiga = $_POST["senhaAntiga"];
				$senhaAtual = $_POST["senhaAtual"];
				$senhaCriptografada = password_hash($senhaAtual, PASSWORD_DEFAULT);
				
				
				
				$stmt =$conexao->prepare("select * from Aluno where id_aluno = '$id' ");
				$stmt->bindParam(1, $id);
				$stmt->execute();	
				$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

				
				foreach($resultado as $linha){
				
					if(password_verify($senhaAntiga, $linha["senha"])){
						
						$sql = "update Aluno set senha = '$senhaCriptografada' where id_aluno = '$id';";

						$stmt = $conexao->prepare($sql);
						
						$stmt->bindValue(1, $id);
					 	$stmt->bindValue(2, $senhaCriptografada);
						

						$stmt->execute();

						$senhaCorreta = "Senha alterada com sucesso!";
						$_SESSION["valido"] = $senhaCorreta;
						header("Location: alterarSenha.php");


					}else{
						
						$senhaIncorreta = "A senha antiga está incorreta!";
						$_SESSION["invalido"] = $senhaIncorreta;
						header("Location: alterarSenha.php");
						
					}
				}
							
	}catch(PDOException $e){
			echo $e->getMessage();
		} 



?>