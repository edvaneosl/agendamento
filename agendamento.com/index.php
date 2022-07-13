<?php
//config
include('config/config.php');
//conexão das reservas
require_once 'connect/db_connect_res.php';
//header
include_once 'includes/header.php';
// Sessão
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

     <!-- HOME -->

      <section class="home bloco scrollspy" id="home">

        <div class="row center">
    		<img src="../lib/img/logo.jpg" class="home_img img-responsive" alt="Responsive image">
            <p style="color:white" class="pt-3">Seja bem vindo à Barbearia do Diego.</p>
   
        </div>
        <div class="row center">
            <a href="class/reservas/reservas.php" class="btn waves-effect waves-light btn-large white-text blue_logo "> Reservar um Horário</a><br>
        </div>
        <div class="row center">
          <a href="class/funcionario/login.php" class="btn btn-small orange white-text">Gerenciamento</a>
        </div>

      </section>


      <section class="home bloco scrollspy" id="home">

        <div class="row center">
            <h5 class="light white-text">Entenda como funciona nosso sistema</h5>
            <div class="card small">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator bg_cardhome" src="lib/img/bg_textura1.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Clique em Reservar um Horário"<i class="material-icons right">more_vert</i></span>
                  <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                  <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
                   
        </div>

      </section>
      
<?php
include_once 'includes/footer.php';
?>