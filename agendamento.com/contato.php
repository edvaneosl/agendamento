<?php
//config
include('config/config.php');
//header
include_once 'includes/header.php';
// Sessão
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>
		<section class="bloco scrollspy" id="contato">
      <div class="row container">

        <div class="col s12 center hoverable z-depth-0">

              <h5 class="light">CONTATO E INFORMAÇÕES</h5><br><br>

        </div>
        
        <div class="col s12 m6 l4 center">
            <div class="mapa transparent black-text">
              <h5> Localização </h5>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3828.9764983886366!2d-48.930716050000015!3d-16.32414504999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ea45a0f932abd%3A0x89922c8da5599e09!2sR.%20C%20-%20Vila%20DOS%20SARGENTOS%2C%20An%C3%A1polis%20-%20GO%2C%2075096-688!5e0!3m2!1spt-BR!2sbr!4v1615737605361!5m2!1spt-BR!2sbr" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <br><br>
            </div>        
         </div>  
         <div class="col s12 m6 l4 center">
            <div class="black-text">
              <a href="#" class="btn-floating blue_logo"><i class="material-icons prefix">thumb_up</i></a>
              <h5> Redes Sociais </h5>
              <p class="black-text light"> Fique por dentro das novidades, receba dicas e mostre ao mundo que você faz parte desse projeto sensacional!</p>
              </div>        
           </div>
           <div class="col s12 m6 l4 center">
            <div class="black-text">
              <a href="#" class="btn-floating blue_logo"><i class="material-icons prefix">access_time</i></a>
              <h5>Horário de Funcionamento:</h5>
              <p>Seg. à Sex.: 08:00 - 13:00 </p><br>
              <a href="#" class="btn-floating blue_logo"><i class="material-icons prefix">phone</i></a>
              <h5>Telefone:</h5>
              <p>(62) 99168-7370</p>
              <a href="#" class="btn-floating blue_logo"><i class="material-icons prefix">business</i></a>
              <h5>Endereço:</h5>
              <p>BR-414, Km 4 s/n Zona Rural, Anápolis - GO</p>
              </div>
              </div>        
           </div>
        </div>
      </section>

<?php
include_once 'includes/footer.php';
?>