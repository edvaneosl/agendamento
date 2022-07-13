<?php
//config
include('../../config/config.php');
//header
include_once '../../includes/header.php';
// Sessão
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

?>

		<!-- Criar Usuário -->

	<?php 
	if($_GET['status']=='user'):
	
	{?>
    <section class="agenda bloco scrollspy" id="">
        <div class="row center">
	      <h5 class="black-text">Criar Usuário</h5>
	    </div>
	   	<form action="user-create.php" method="POST" id="formAdd" name="formAdd">
	      	<div class="row form">
		      <div class="input-field col s12">
	              <i class="material-icons prefix">face</i>
	              <input class="validate field" type="text" name="nome" id="nome" placeholder="Ex.João" required>
	              <label for="nome">Insira seu nome</label>
	          </div>
	          <div class="input-field col s12">
	              <i class="material-icons prefix">face</i>
	              <input class="validate field" type="text" name="sobrenome" id="sobrenome" placeholder="Ex.Silva" required>
	              <label for="sobrenome">Insira seu sobrenome</label>
	          </div>
	          <div class="input-field col s12">
	              <i class="material-icons prefix">phone</i>
	              <input class="validate field" type="text" name="login" id="login" placeholder="Username" required>
	              <label for="telefone">Insira o login</label>
	          </div>
	           <div class="input-field col s12">
	              <i class="material-icons prefix">email</i>
	              <input class="validate field" type="password" name="senha" id="senha" placeholder="Senha" required>
	              <label for="senha">Insira a Senha</label>
	          </div>
          

          	<div class="row center">
				<button style="color:darkblue" href="#reservas" class=" btn-small blue_logo center" type="submit" name="btn-create-user" >Criar Usuário</button>
				<a style="" href="agenda.php" class=" btn-small orange center" type="" name="">Voltar</a>

			</div>
		</form>
		<div>
		<?php
		if(isset($_SESSION['status-create'])):
		{
			echo "<script>alert('Usuário cadastrado com sucesso');</script>";			
		}
		endif;
		?> 	
		</div>
		
    </section>

	<?php }
	elseif($_GET['status']=='password'):
	{?>
	<section class="agenda bloco scrollspy" id="">
        <div class="row center">
	      <h5 class="black-text">Recuperar Senha</h5>
	    </div>
	   	<form action="user-create.php" method="POST" id="formRec" name="formRec">
	      	<div class="row form">
	          <div class="input-field col s12">
	              <i class="material-icons prefix">login</i>
	              <input class="validate field" type="text" name="login" id="login" placeholder="Username" required>
	              <label for="telefone">Insira o login</label>
	          </div>
	           <div class="input-field col s12">
	              <i class="material-icons prefix">lock</i>
	              <input class="validate field" type="password" name="senha" id="senha" placeholder="Senha" required>
	              <label for="senha">Insira a nova senha</label>
	          </div>
	          <div class="input-field col s12">
	              <i class="material-icons prefix">lock</i>
	              <input class="validate field" type="password" name="senha2" id="senha2" placeholder="Senha" required>
	              <label for="senha">Repita a nova Senha</label>
	          </div>
          

          	<div class="row center">
				<button style="color:darkblue" href="#reservas" class=" btn-small blue_logo center" type="submit" name="btn-pass-recover" >Cadastrar nova senha</button>
				<a style="" href="agenda.php" class=" btn-small orange center" type="" name="">Voltar</a>

			</div>
		</form>
		<div>
		<?php
		if (isset($_SESSION['status-recover'])):
		{
			echo "<script>alert('Senha alterada com sucesso');</script>";
		}
		endif;
		?> 	
		</div>
		
    </section>


	<?php
		}
	endif;
	?>

<?php include(DIRREQ."includes/footer.php"); ?>
