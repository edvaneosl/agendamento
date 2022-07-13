<?php
//config
include('../../config/config.php');
//conexao
require_once '../../connect/db_connect_res.php';
//calendario
include_once '../reservas/calendario.php';
//header
include_once '../../includes/header.php';



// Sessão
if(!isset($_SESSION)):
    { 
        session_start(); 
    }
elseif(isset($_SESSION['id'])):
	{
		header('Location: agenda.php');
	}
endif;


// Lógica login
if(isset($_POST['login']) || isset($_POST['senha'])) {

    if(strlen($_POST['login']) == 0) {
        echo "Preencha seu usuário";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

    	$login = addslashes($_POST['login']);
    	$senha = addslashes($_POST['senha']);

        $sql = $connect->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ? ");
        $sql->execute(array($login,$senha));

        if($sql->rowCount() == 1){
        	
            $usuario = $sql->fetch();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: agenda.php");
        }
        else {
        	header("Location: login.php");
        }

    }

}

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
			      <label for="validationServer01">Usuário</label>
			      <input type="text" name="login" class="form-control is-valid" id="validationServer01" value="" placeholder="Insira seu usuário" required>
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="typepass">Senha</label>
			      <input type="password" name="senha" class="form-control is-valid" id="typepass" value="" placeholder="Insira sua senha" autocomplete="off" required>
	    			
			    </div>
			  </div>
			  <div class="center">
			  	<button href="#reservas" class="btn btn-primary blue_logo" type="submit" name="btn-entrar">Entrar</button><br>
			  </div>  
			  <div><br></div>

			</form>

	      </div>


	      


	    </section>

<?php include(DIRREQ."includes/footer.php"); ?>