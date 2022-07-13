<?php
//config
include('../../config/config.php');
//conexao
require_once '../../connect/db_connect_res.php';
//verificação
include_once('protect.php');
//calendario
include_once '../reservas/calendario.php';
//header
include_once '../../includes/header.php';
// Sessão
if(!isset($_SESSION))
    { 
        session_start(); 
    }
?>



		<!-- AGENDA -->


	    <!-- Tabs -->

	    <section id="tab" class="home bloco scrollspy white">
	    	<div class="row">
			    <div class="col s12">
			      <ul class="tabs">
			        <li class="tab col s6 m3 l3"><a href="#agenda" style="background-color: 'blue;';">Agenda</a></li>
			        <li class="tab col s6 m3 l3 disabled"><a href="#lista">Lista</a></li>
			        <li class="tab col s6 m3 l3"><a  href="#configuracoes">Configurações</a></li>
			        <li class="tab col s6 m3 l3"><a href="logout.php" target="_self">Sair</a></li>
			      </ul>
			    </div>
			    <div id="agenda" class="col s12"> <!--id agenda-->
			    	<div class="row">
		    			<div class="col s9 m9 l6 center">
		    				<h5>Gerenciamento - Área Restrita</h5>
		    			</div>
		    		</div>
		    		<div class="calendarManager"></div>
	    		</div>
			    <div id="lista" class="col s12">Lista</div><!--id lista-->
			    <div id="configuracoes" class="col s12">
			    	<div class="row">
		    			<div class="center">
		    				<div class="col s12 m6 l6">
		    					<div class="blue_logo"><h6>Configurar Calendário</h6></div>
		    					<div style="background-color:ghostwhite"> <!-- desabilitar dias -->
		    					<p>Desabilitar dias</p>
		    					<form method="POST" action="<?php echo DIRPAGE.'class/reservas/create.php';?>">
		    						<input class=" validate field" type="date" name="date" id="date" value="" style="width:50%"required>
		    						<button style="color:ghostwhite;" href="#" class="btn-off-dia btn-small center" type="submit" name="btn-off-dia">Confirmar</button>
		    					</form>	    						
		    					</div> <!-- desabilitar dias -->
		    					<div style="background-color:ghostwhite"><!-- desabilitar semana -->
		    					<p>Desabilitar Semana</p>
		    					<form>
		    						<label >Início</label>
		    						<input class=" validate field" type="date" name="date" id="start" placeholder="inicio" value=""  style="width:20%" required>
		    						<label >Fim</label>
		    						<input class=" validate field" type="date" name="date" id="end" value="" placeholder="fim" style="width:20%" required>
		    						<button style="color:ghostwhite;" href="#" class="btn-off-per btn-small center" type="submit" name="btn-off-per" onclick="M.toast({html: 'Em construção!'})">Confirmar</button>
		    					</form>		    						
		    					</div><!-- desabilitar semana -->
		    					<div style="background-color:ghostwhite"><!-- intervalo atendimento -->
		    					<p>Escolher intervalo de atendimento</p>
		    					<form>
		    						<label >Início</label>
		    						<input class=" validate field" type="time" name="time" id="start" placeholder="inicio" value=""  style="width:20%" required>
		    						<label >Fim</label>
		    						<input class=" validate field" type="time" name="time" id="end" value="" placeholder="fim" style="width:20%" required>
		    						<button style="color:ghostwhite;" href="#" class="btn-off-per btn-small center" type="submit" name="btn-off-per " onclick="M.toast({html: 'Em construção!'})" >Confirmar</button>
		    					</form>		    						
		    					</div><!-- intervalo atendimento -->
		    				</div>
		    				<div class="col s12 m6 l6">
		    					<div class="blue_logo">
		    						<h6>Perfis e Contas</h6>
		    					</div>
		    					<div style="background-color:ghostwhite">
		    						<p>Criar Novo Usuário</p>
		    						<a class="btn-add-user btn-floating" href="user-config.php?status=user" style="margin: 10px;"><i class="material-icons">add</i></a>
		    					</div>
		    					<div style="background-color:ghostwhite">
		    						<p>Recuperar Senha</p>
		    						<a class="btn-user-recover btn-floating" href="user-config.php?status=password" style="margin: 10px;">
		    						<i class="material-icons">lock</i></a>
		    					</div>
		    					<div style="background-color:ghostwhite">
		    						<p>Mais Configurações</p>
		    						<a class="btn-user-recover btn-floating" href="#" style="margin: 10px;" onclick="M.toast({html: 'Em construção!'})">
		    						<i class="material-icons">settings</i></a>

		    					</div>
		    				</div>
		    			</div>
		    		</div>
		    	</div><!--id config-->
			    <div id="sair" class="col s12"></div><!--id sair-->
		  	</div>
	    	
	    </section>

	    <!-- Lista de Agendamento -->

	    <?php

	    $a = 0; 

	    if($a == 1): {  ?>

	    <section class="agenda bloco scrollspy" id="home">
	      <div class="row container">
	      	<div class="row valign-wrapper">
				<div class="col s9 m9 l6 center">
					<h5>Lista de Horários - Área Restrita</h5>
			  	</div>
			  		<div class="col s3 m3 l6 center">
			  			<a class="btn btn-small grey" href="logout.php">Sair</a>
			  		</div>	
			</div>	
	      	<div class="col s12">
	      	<table class="table striped centered">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Nome</th>
			      <th scope="col">Telefone</th>
			      <th scope="col">Email</th>
			      <th scope="col">Início</th>
			      <th scope="col">Fim</th>
			      <th scope="col">Serviço</th>
			      <th scope="col">Editar</th>
			      <th scope="col">Deletar</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	$sql = "SELECT * FROM events ORDER BY start ASC";
			  	$resultado = mysqli_query($connect, $sql);

			  	if(mysqli_num_rows($resultado) > 0):

			  	while ($dados = mysqli_fetch_array($resultado)):
			  	?>
			  	
			    <tr>
			      <td><?php echo $dados['id']; ?></td>
			      <td><?php echo $dados['nome']; ?></td>
			      <td><?php echo $dados['telefone']; ?></td>
			      <td><?php echo $dados['email']; ?></td>
			      <td><?php echo $dados['start']; ?></td>
			      <td><?php echo $dados['end']; ?></td>
			      <td><?php echo $dados['servico']; ?></td>

			      <td><a href="editar.php?id=<?php echo $dados['id'];?>" class="btn green"><i class="material-icons">edit</i></a></td>
			      
			      <td><a href="#modalApagar" class="btn red modal-trigger" name="btn-deletar" type="submit"><i class="material-icons">delete</i></a>	
			      </td>

			      <!-- Modal Structure -->
					  <div id="modalApagar" class="modal">
					    <div class="modal-content">
					      <h4>Atenção</h4>
					      <p>Tem certeza que deseja excluir?</p>
					    </div>
					    <div class="modal-footer">

					      <form action="../reservas/delete.php" method="GET">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button id="delete" href="#home>" class="btn red modal-trigger right" name="btn-deletar" type="submit">Sim, tenho certeza.</button>

					      	<a href="#!" class="modal-close waves-effect waves-green btn-flat green">Cancelar</a>
					      </form>



					    </div>
					  </div>

			    </tr>
			<?php 
			endwhile;
			else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

				<?php
				endif;
			?>

			  </tbody>
			</table>
			<br>
			<div class="row center">
				<a href="#grade" class="btn btn-info orange">Calendário</a>
			</div>	
	      	</div>
	      </div>
	      
	    </section>
	    <?php } endif; ?>
	    
<?php include(DIRREQ."includes/footer.php"); ?>