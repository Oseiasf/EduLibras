<?php 
session_start();
require ('funcoes.php');
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
	</head>
	<body>
		<?php include('navBar.php');?>
		<!-- Banner -->
		<div id="telaInicial">
			<div class="imagem-mao" ><img  src="images/mao.png"></div>
			<?php
					    
					    if (isset($_SESSION["email"])) {
					    	$_SESSION["nome"] = $nome;
					?>
					<center><h1 class="bemVindo">Bem vindo, <?= $resultado['nome_completo'];?>.</h1></center>
				<?php } else {

				?>
			<div class="login">
				<div class="modal-body">
				<center><h3 class="nomeLogin">Login</h3></center>
				<form class="formularioLogin" method="POST" action="verificaLogin.php">
				  <div class="form-group">
				  	<center><?= $senhaIncorreta?></center>
				    <label for="exampleInputLogin">Usuario</label>
				    <input type="text" class="form-control" name="login" id="exampleInputLogin" aria-describedby="loginHelp" placeholder="Digite seu email">
				    <small id="loginHelp" class="form-text text-muted">Digite o email usado na hora do cadastro</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Senha</label>
				    <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Digite uma senha">
				    <small id="nameHelp" class="form-text text-muted">Digite a senha usada na hora do cadastro</small>
				  </div>
				  <center><button type="submit" class="btn btn-login btn-default">Entrar</button></center><br>
					<a href="" class="">Esqueci minha senha</a><br>
					<a href="" data-toggle="modal" data-target="#cadastroUsuario">Clique aqui para se cadastrar.</a>
				</form>
				</div>
				<?php
				} 

				?>
			</div>
		
		</div>
		
		<div class="rodape">
			<?php require('footer.html');?>	
		</div>
	</body>
</html>