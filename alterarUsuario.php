<?php 

    require('conexao.php');
     
    	try{

    			
    			$id = $_POST["idUsuario"];
				$nome = $_POST["nome"];
				$cpf =$_POST["cpf"];
				$data = $_POST["dataNasc"];
				$dataP = explode('/', $data);
				$dataNoFormatoParaOBanco = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];
				$email = $_POST["email"];
				
				
				// $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
				
				$sql = "update Aluno set nome_completo = '$nome', cpf = '$cpf', email = '$email',  data_nascimento = 'dataNoFormatoParaOBanco' where id_aluno = '$id';";

				$stmt = $conexao->prepare($sql);
				
				$stmt->bindValue(1, $id);
			 	$stmt->bindValue(2, $nome);
				$stmt->bindValue(3, $cpf);
			 	$stmt->bindValue(4, $dataNoFormatoParaOBanco);
			 	$stmt->bindValue(5, $email);
				

				$stmt->execute();

				 header("Location: index.php");
	}catch(PDOException $e){
			echo $e->getMessage();
		} 


?>