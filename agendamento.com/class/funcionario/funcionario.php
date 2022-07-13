<?php
//conexao
require_once '../../connect/db_connect_res.php';

// Sessão
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

//Botão enviar
if(isset($_POST['btn-entrar'])):
	$erros = array();
	$login = mysqli_escape_string($connect, $_POST['usuario']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	if(empty($login) or empty($senha)):
		$erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
	else:
		$sql = "SELECT login FROM usuarios WHERE login = '$login'";
		$resultado = mysqli_query($connect, $sql);

		if(mysqli_num_rows($resultado) > 0):
			$senha = md5($senha);
			$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($connect, $sql);
			mysqli_close($connect);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				header('Location: agenda.php');

			else:
				$erros[] = "<li> Usuário e senha não conferem </li>";
			endif;

		else:
			$erros[] = "<li> Usuário inexistente </li>";
		endif;

	endif;
endif;

//header
include_once '../../includes/header.php';

?>





		<!-- HOME -->

	    <section class="funcionario bloco scrollspy" id="home">
	      <div class="container">
	     
	      <div class="row justify-content-center">
	          <img src="../../lib/img/logo.jpg" class=" homeimg img-responsive center-block" alt="Responsive image">
	          <br>
	      </div>
	      <div class="row center">
	  
	      	  <h5 class="black-text">Área do Funcionário</h5>
	 
	      </div>

	      <?php
	      if(!empty($erros)):
	      	foreach($erros as $erro):
	      		echo $erro;
	      	endforeach;
	      endif;


	      ?>
	      <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
			  <div class="form-row justify-content-center">
			    <div class="col-md-4 mb-3">
			      <label for="validationServer01" ">Usuário</label>
			      <input type="text" name="usuario" class="form-control is-valid" id="validationServer01" placeholder="usuario" value="" required>
			      <div class="valid-feedback">
			        Insira seu usuário
			      </div>
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="validationServer02">Senha</label>
			      <input type="text" name="senha" class="form-control is-valid" id="validationServer02" placeholder="senha" value="" required>
			      <div class="valid-feedback">
			        Insira sua senha<br
			      </div>
			    </div>
			  </div>
			  <div class="center">
			  	<button href="#reservas" class="btn btn-primary blue_logo" type="submit" name="btn-entrar">Entrar</button>  	
			  </div>  
			  

			</form>

	      </div>


	      


	    </section>

<?php include(DIRREQ."includes/footer.php"); ?>