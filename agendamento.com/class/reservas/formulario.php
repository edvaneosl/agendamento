<?php
//config
include('../../config/config.php');
//conexao
require_once '../../connect/db_connect_res.php';
//calendario
include_once 'calendario.php';
//header
include_once '../../includes/header.php';
?>





<!-- formulario -->

	    <section class="reservas bloco scrollspy" id="reservas">
	      <div class="container">

	      <div class="row center">
	  
	      	  <h5 class="black-text">Reservar Horário</h5>

	      	  <?php $date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo'));?>
	 
	      </div>
	      <form action="create.php" method="POST" id="formAdd" name="formAdd">
	      	<div class="row form">
	      		<div class="input-field col s12">
              <i class="material-icons prefix">face</i>
              <input class="validate field" type="text" name="nome" id="nome" placeholder="Ex.João" required>
              <label for="nome">Insira seu nome</label>
          </div>
          <div class="input-field col s12">
              <i class="material-icons prefix">phone</i>
              <input class="validate field" type="text" name="telefone" id="telefone" placeholder="Ex.62 99999-9999" required>
              <label data-error="Telefone inválido" data-success="Telefone válido" for="telefone">Insira seu telefone</label>
          </div>
           <div class="input-field col s12">
              <i class="material-icons prefix">email</i>
              <input class="validate field" type="email" name="email" id="email" placeholder="Ex.joaodasilva@gmail.com" required>
              <label data-error="E-mail inválido" data-success="E-mail válido" for="email">Seu e-mail?</label>
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
				      <option value="Cabelo Tesoura">Cabelo Tesoura</option>
				      <option value="Cabelo Máquina">Cabelo Máquina</option>
				      <option value="Cabelo e Barba">Cabelo e Barba</option>
				      <option value="Barba">Barba</option>
				      <option value="Sobrancelha">Sobrancelha</option>
				    </select>
            <label data-error="Serviço inválido" data-success="Serviço válido" for="data">Serviço</label>
          </div><br>

          <div class="row center">
					<button style="color:darkblue" href="#reservas" class=" btn btn-primary blue_logo center" type="submit" name="btn-cadastrar-res">Cadastrar reserva</button>
					<a style="" href="reservas.php" class=" btn btn-primary orange center" type="" name="">Voltar</a>
					</div>

			    
				</div>
			  </form>
			  	

			</div>
		</section>

<?php include(DIRREQ."includes/footer.php"); ?>