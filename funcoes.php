<?php
	require('conexao.php');

		$email = $_SESSION['email'];
		$sql = "select * from Aluno where email = '$email'";
		$stmt = $conexao->prepare($sql);
		$stmt->bindValue(1,$email);
		$stmt->execute();

		$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

		
		$dataP = explode('-', $resultado['data_nascimento']);
		$dataParaExibir = $dataP[2].'/'.$dataP[1].'/'.$dataP[0];


?>