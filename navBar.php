<?php require('funcoes.php');?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="index.php">
		    <img src="images/edulibras.png" width="310" height="50" alt="">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>   
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		    	<li class="nav-item">
		        	<a class="nav-link" href="quemSomos.php">O que somos?</a>
		    	</li>
		    	<li class="nav-item">
		        	<a class="nav-link" href="telaEquipe.php">Equipe</a>
		    	</li>
		    	<?php	    
				if (!isset($_SESSION["email"])) {
			  ?>
		    	<li class="nav-item">
		        	<a class="nav-link" href="" data-toggle="modal" data-target="#sugestoes">Fale Conosco</a>
		    	</li>
		    	<?php }
		    	?>
		      <?php	    
				if (isset($_SESSION["email"])) {
			  ?>
		    	<li class="nav-item">
		    		<form class="form-inline my-2 my-lg-0" method="POST" action="buscarPorVideos.php">
				      <input class="form-control mr-sm-2" type="search" placeholder="O que você procura?" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
				    </form>
		    	</li>
		      <li class="nav-item">
		        <a class="nav-link" href="telaDeVideo.php">Aulas</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Área do Aluno
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="" data-toggle="modal" data-target="#alterarUsuario" onclick="editarDados(<?=$resultado['nome_completo']?>,<?=$resultado['email']?>,<?=$resultado['senha']?>);">Perfil</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="" data-toggle="modal" data-target="#sugestoes">Fale Conosco</a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="logout.php">Sair</a>
		      </li>
		      <?php } ?>
		    </ul>
		  </div>
		</nav>
			<?php	    
				if (!isset($_SESSION["email"])) {
			?>
<div class="modal fade" id="cadastroUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form method="POST" action="cadastrarUsuario.php">
				  <div class="form-group">
				    <label for="exampleInputName">Nome Completo</label>
				    <input type="text" class="form-control" id="exampleInputName" name="nome" aria-describedby="emailHelp" placeholder="Digite seu nome">
				    <small id="nameHelp" class="form-text text-muted" ></small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu email">
				    <small id="emailHelp" class="form-text text-muted" >exemplo@exemplo.com</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Senha</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite uma senha">
				    <small id="nameHelp" class="form-text text-muted" >A senha deve conter, no minimo, 6 (seis) digitos</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Confirmar senha</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite novamente a senha">
				  </div>
				  <div class="form-group">
				    <label for="exampleSelect1">Qual seu nível em LIBRAS?</label>
				    <select class="form-control" id="exampleSelect1" name="tipoUsuario">
				      
				      <option value="1">Avançado</option>
				      <option value="2">Intermediário</option>
				      <option value="3">Básico</option>
				      
				    </select>
				  </div>
				  <!-- <div class="form-check">
				    <label class="form-check-label">
				      <input type="checkbox" class="form-check-input">
				      Eu concordo com os termos.
				    </label>
				  </div> -->
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		        <button type="submit" class="btn btn-primary">Confirmar cadastro</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
<?php } ?>
<?php	    
				if (isset($_SESSION["email"])) {
			  ?>
		<div class="modal fade" id="alterarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Dados Pessoais</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form method="POST" action="alterarUsuario.php">
				  <div class="form-group">
				    <label for="exampleInputName">Nome Completo</label>
				    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" value="<?=$resultado['nome_completo'];?>">
				    <small id="nameHelp" class="form-text text-muted" ></small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1" id="email">Email</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?=$resultado['email'];?>">
				    <small id="emailHelp" class="form-text text-muted" >exemplo@exemplo.com</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleSelect1">Qual seu nível em LIBRAS?</label>
				    <select class="form-control" id="exampleSelect1" name="tipoUsuario">
				      
				      <option value="1">Avançado</option>
				      <option value="2">Intermediário</option>
				      <option value="3">Básico</option>
				      
				    </select>
				  </div>
				  <div class="form-group">
				    <label><a href="alterarSenha.php">Alterar senha</a></label>
				  </div>
				  <!-- <div class="form-check">
				    <label class="form-check-label">
				      <input type="checkbox" class="form-check-input">
				      Eu concordo com os termos.
				    </label>
				  </div> -->
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		        <button type="submit" class="btn btn-primary">Atualizar Dados</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
<?php } ?>
<div class="modal fade" id="sugestoes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Estamos sempre buscando o melhor para você!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="recebeSugestoes.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name" name="email">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensagem:</label>
            <textarea class="form-control" id="message-text" name="descricao"></textarea>
          </div>
          <div class="modal-footer">
	        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
	        <button type="submit" class="btn btn-primary">Enviar</button>
	      </div>
        </form>
      </div>
    </div>
  </div>
</div>