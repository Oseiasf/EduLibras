<?php
	session_start();
	require ('funcoes.php');
	if (!isset($_SESSION["email"])) {
		header("Location: index.php");

	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>EduLibras</title>
		<link rel="icon" type="image/png" href="images/edulibras.png" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="utf-8" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
		<style type="text/css">

		</style>
	</head>
	<body>
		<?php include('navBar.php');?>
		<div class="imgEdu">
			<center>
				<img src="images/edulibras.png" width="400" height="100" alt="">
			</center>
		</div>
		<div class="AlterarSenha">
			<center>
				<h1 class="texto">Alterar Senha</h1>
				<form method="POST" action="alterandoSenha.php">
					<?php
						// verifica se a variavel session['invalido'] existe, se existir mostra o erro
					    if(isset($_SESSION["valido"])){
					    	$dados_corretos = $_SESSION["valido"];
					?>
					<center><h3 class="texto"><?=$dados_corretos?></h3></center>
					<?php
					 } elseif (isset($_SESSION["invalido"])) {
					 	$dados_incorretos = $_SESSION["invalido"];
					?>
					<center><h3 class="texto"><?=$dados_incorretos?></h3></center>
					<?php
					}
					?>
				  <div class="form-group">
				    <div class="form-group">
				    <label class="texto" for="exampleInputPassword1">Senha Antiga</label>
				    <input type="hidden" name="idUsuario" value="<?=$resultado['id_aluno'];?>" >
				    <input type="password" class="form-control border border-primary" name="senhaAntiga" id="alterarSenhaAntiga" placeholder="Digite a senha antiga">
				  </div>
				  <div class="form-group">
				    <label class="texto" for="exampleInputPassword2">Senha Atual</label>
				    <input type="password" class="form-control border border-primary" name="senhaAtual" id="alterarSenhaAtual" placeholder="Digite uma nova senha">
				  </div>
				  <button type="submit" class="btn btn-primary">Alterar</button>
				</form>
			</center>
		</div>
		<div class="rodape-diferente">
			<?php require('footer.html');?>
		</div>
	</body>
</html>
<?php unset($_SESSION["valido"]);
	unset($_SESSION["invalido"]); 
?>