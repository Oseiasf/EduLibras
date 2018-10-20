<?php 
	try {

		$conexao = new PDO('mysql:host=localhost;dbname=edu_libras', 'root', '123');

		} catch(PDOException $e) {
		    echo 'ERROR: ' . $e->getMessage();
	}

?>