<?php 

    require('conexao.php');
     
    	try{
			
			$email = $_POST["email"];
			$descricao = $_POST["descricao"];

			$stmt = $conexao->prepare("insert into Fale_conosco (email, descricao) values ('$email', '$descricao')");
			
				
				$stmt->bindValue(1, $email);
				$stmt->bindValue(2, $descricao);
				//var_dump($stmt);
				$stmt->execute();

				 header("Location: index.php");
	}catch(PDOException $e){
			echo $e->getMessage();
		} 


?>