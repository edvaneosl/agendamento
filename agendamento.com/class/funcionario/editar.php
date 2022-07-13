<?php
//config
include('../../config/config.php');
//conexao
require_once '../../connect/db_connect_res.php';
//calendario
include_once '../reservas/calendario.php';
// Select
$objEvents=new ClassEvents();
$events=$objEvents->getEventsById($_GET['id']);
$date=new \DateTime($events['start']);
//header
include_once '../../includes/header.php';
// Sessão
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>


	<!-- HOME -->
	<section class="editar bloco scrollspy" id="editar">
	      <div class="container">

	      <div class="row center">
	  				
	  				<div class="">
	  					<h5 class="black-text">Atualizar Dados</h5>
	  				</div>

	  				<div class="">
	  					<a id="delete" href="#modalApagar" class="btn red modal-trigger right" name="btn-apagar" type="submit">Deletar Reserva</a>
	  				</div>
	      	  
	      	  <!-- Modal Apagar -->
					  <div id="modalApagar" class="modal">
					    <div class="modal-content">
					      <h4>Atenção</h4>
					      <p>Tem certeza que deseja excluir?</p>
					    </div>
					    <div class="modal-footer">

					      	<a href="<?php echo DIRPAGE.'class/reservas/delete.php?id='.$_GET['id']; ?>" class="btn waves-effect waves-light red" name="btn-deletar">Sim, tenho certeza.</a>

					      	<a href="#!" class="modal-close waves-effect waves-green btn-flat green">Cancelar</a>



					    </div>
					  </div>
	 
	      </div>
	      <form action="../reservas/update.php" method="POST" id="formEdit" name="formAdd">
	      	<input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
	      	<div class="row form">
	      		<div class="input-field col s12">
              <i class="material-icons prefix">face</i>
              <input class="validate field" type="text" name="nome" id="nome" placeholder="Ex.João" value="<?php echo $events['nome']; ?>">
              <label for="nome">Nome</label>
          </div>
          <div class="input-field col s12">
              <i class="material-icons prefix">phone</i>
              <input class="validate field" type="text" name="telefone" id="telefone" placeholder="Ex.62 99999-9999" value="<?php echo $events['telefone']; ?>" required>
              <label data-error="Telefone inválido" data-success="Telefone válido" for="telefone">Telefone</label>
          </div>
           <div class="input-field col s12">
              <i class="material-icons prefix">email</i>
              <input class="validate field" type="email" name="email" id="email" placeholder="Ex.joaodasilva@gmail.com" value="<?php echo $events['email']; ?>" required>
              <label data-error="E-mail inválido" data-success="E-mail válido" for="email">E-mail</label>
          </div>
          <div class="input-field col s12">
              <i class="material-icons prefix">event</i>
              <input class=" validate field" type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>" readonly>
              <label data-error="Data inválida" data-success="Data válida" for="data" >Data</label>
          </div>
          <div class="input-field col s12">
          	<i class="material-icons prefix">scheduler</i>
          	<input class= "validate field" type="time" name="hora" id="hora" placeholder="" value="<?php echo $date->format("H:i"); ?>" readonly>
              <label data-error="Serviço inválido" data-success="Serviço válido" for="data">Horário</label>
          </div>
          <div class="input-field col s12">
          	<i class="material-icons prefix">list</i>
          	<select class="validate field" type="text" name="servico" id="servico" placeholder="Ex.Cabelo" required>
				      <option value="" disabled selected>Selecione</option>
				      <option value="20">Cabelo</option>
				      <option value="20">Barba</option>
				    </select>
            <label data-error="Serviço inválido" data-success="Serviço válido" for="data">Serviço</label>
          </div><br>

          <div class="row center">
			<button style="color:darkblue" href="#reservas" class=" btn btn-primary blue_logo center" type="submit" name="btn-editar">Atualizar dados</button>
		  </div>

			    
		</div>
		</form>
			  	

		</div>
		</section>



<?php include(DIRREQ."includes/footer.php"); ?>