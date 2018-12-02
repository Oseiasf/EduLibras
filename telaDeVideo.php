<?php
	session_start();
	if (!isset($_SESSION["email"])) {
		header("Location: index.php");

	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>EduLibras</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="icon" type="image/png" href="images/edulibras.png" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
		<script>	
			function mudar_nome(){
				document.teste.Submit.value = document.teste.mudar.value;
			}
		</script>
	</head>
	<body class="telaVideos">
		<?php include('navBar.php');?>
			<div class="videoCentro">
				<div>
					<div class="videoUnico">
						<div class="card" style="width: 30rem; height: 20rem;">
							<iframe width="478" height="450" src="https://www.youtube.com/embed/srM2XHzu0g8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<div class="card-body">
								<p class="card-text"></p>
							</div>
						</div>			
					</div>
					<div>
						<h1 class="descricaoVideo">Aula sobre os meses do ano</h1>
					</div>
					<div class="informacoesVideoUnico" style="width: 30rem;">
						<p>
							<button class="btn btn-default" style="width: 30rem;" type="button" data-toggle="modal" data-target="#informacoesDoVideo">
						   Informações do video
							</button>
						</p>
					</div>
						<div class="modal fade" id="informacoesDoVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Aula sobre os meses do ano</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        Aprenda os sinais dos meses do ano. É simples e fácil.
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						      </div>
						    </div>
						  </div>
						</div>	
					</div>


				</div>
				<div class="listaVideos" style="width: 15rem;">
					<div class="card" style="width: 15rem;">
						<img style="width: -15rem; align-self: center;" class="card-img-top" src="images/bem-vindo1.gif" alt="Card image cap">
						<div class="card-body">
							<p class="card-text">Aula 1 - Português</p>
						</div>
					</div>
				</div>

				<div class="listaVideos" style="width: 15rem;">
					<div class="card" style="width: 15rem;">
						<img style="width: -15rem; align-self: center;" class="card-img-top" src="images/bem-vindo1.gif" alt="Card image cap">
						<div class="card-body">
							<p class="card-text">Aula 2 - Português</p>
						</div>
					</div>
				</div>

				<div class="collapse" id="collapseExample">
					<div class="listaVideos" style="width: 15rem;">
						<div class="card" style="width: 15rem;">
							<img style="width: -15rem; align-self: center;" class="card-img-top" src="images/bem-vindo1.gif" alt="Card image cap">
							<div class="card-body">
								<p class="card-text">Aula 3 - Português</p>
							</div>
						</div>
					</div>

					<div class="listaVideos" style="width: 15rem;">
						<div class="card" style="width: 15rem;">
							<img style="width: -15rem; align-self: center;" class="card-img-top" src="images/bem-vindo1.gif" alt="Card image cap">
							<div class="card-body">
								<p class="card-text">Aula 4 - Português</p>
							</div>
						</div>
					</div>
				</div>
				<div class="listaVideos" style="width: 15rem;">
					<center>
						<button onClick="mudar_nome()" class="btn btn-default" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
	    				Exibir mais
	  					</button>
	  				</center>
  				</div>
			</div>
		<div class="rodape">
			<?php require('footer.html');?>	
		</div>
	</body>
</html>