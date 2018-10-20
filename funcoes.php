<?php
	require('conexao.php');

		$email = $_SESSION['email'];
		$sql = "select * from usuario where email = '$email'";
		$stmt = $conexao->prepare($sql);
		$stmt->bindValue(1,$email);
		$stmt->execute();

		$resultado = $stmt->fetch(PDO::FETCH_ASSOC);


?>