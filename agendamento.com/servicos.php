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

		<!-- SERVIÇOS -->


    <section class="bloco scrollspy" id="servicos">
        <div class="row container center">

            <div class="col s12 center hoverable z-depth-0">

              <h5 class="light black-text">SERVIÇOS</h5>
              <h5 class="light black-text">Entenda um pouco mais sobre cada tipo de serviço.</h5><br>

            </div>

              <article class="col s12 m6 l3">
              <div class="card">
                <div class="card-image">
                  <img src="lib/img/bg_textura.jpg" alt="sites" class="materialboxed">
                </div>
                <div class="card-content">
                    <h3 class="card-title"> Cabelo Tesoura </h3>
                </div>
              </div>
             </article>

             <article class="col s12 m6 l3">
              <div class="card">
                <div class="card-image">
                  <img src="lib/img/bg_textura.jpg" alt="desktop" class="materialboxed">
                </div>
                <div class="card-content">
                    <h3 class="card-title"> Cabelo Máquina </h3>
                </div>
              </div>
             </article>

             <article class="col s12 m6 l3">
              <div class="card">
                <div class="card-image">
                  <img src="lib/img/bg_textura.jpg" alt="sites" class="materialboxed">
                </div>
                <div class="card-content">
                    <h3 class="card-title"> Cabelo e Barba </h3>
                </div>
              </div>
             </article>

             <article class="col s12 m6 l3">
              <div class="card">
                <div class="card-image">
                  <img src="lib/img/bg_textura.jpg" alt="sites" class="materialboxed">
                </div>
                <div class="card-content">
                    <h3 class="card-title"> Barba </h3>
                </div>
              </div>
             </article>

             <article class="col s12 m6 l3">
              <div class="card">
                <div class="card-image">
                  <img src="lib/img/bg_textura.jpg" alt="sites" class="materialboxed">
                </div>
                <div class="card-content">
                    <h3 class="card-title"> Sobrancelha </h3>
                </div>
              </div>
             </article>


             <!-- MODAL ST-1 -->
               <div class="modal" id="st1-modal">
                  <div class="modal-content">
                      <h5 class="light"> Nossos sites incluem: </h5>
                     <ul class="collection">
                        <li class="collection-item"> Consultoria Técnica.</li>
                        <li class="collection-item"> Otimização SEO para melhor visualização no Google.</li>
                        <li class="collection-item"> Otimização para divulgação em redes sociais.</li>
                        <li class="collection-item"> Garantia de funcionamento 24h por dia / 7 dias por semana.</li>
                        <li class="collection-item"> Site responsivo à navegação em dispositivos móveis.</li>
                        <li class="collection-item"> Satisfação Garantida ou seu dinheiro de volta.</li>
                      </ul>
                 </div>

                  <div class="modal-footer">
                     <a class="btn blue_logo modal-action modal-close"> Sair </a>
                  </div>
               </div>
               <!-- MODAL ST-2 -->
               <div class="modal" id="st2-modal">
                  <div class="modal-content">
                      <h5 class="light"> Nossos sites incluem: </h5>
                     <ul class="collection">
                        <li class="collection-item"> Serviço indisponível no momento.</li>
                     </ul>
                 </div>

                  <div class="modal-footer">
                     <a class="btn blue_logo modal-action modal-close"> Sair </a>
                  </div>
               </div>
               <!-- MODAL ST-3 -->
               <div class="modal" id="st3-modal">
                  <div class="modal-content">
                      <h5 class="light"> Nossos sites incluem: </h5>
                     <ul class="collection">
                        <li class="collection-item"> Serviço indisponível no momento.</li>
                     </ul>
                 </div>

                  <div class="modal-footer">
                     <a class="btn blue_logo modal-action modal-close"> Sair </a>
                  </div>
               </div>
               <!-- MODAL ST-4 -->
               <div class="modal" id="st4-modal">
                  <div class="modal-content">
                      <h5 class="light"> Nossos sites incluem: </h5>
                     <ul class="collection">
                        <li class="collection-item"> Serviço indisponível no momento.</li>
                     </ul>
                 </div>

                  <div class="modal-footer">
                     <a class="btn blue_logo modal-action modal-close"> Sair </a>
                  </div>
               </div>

        </div>

<?php
include_once 'includes/footer.php';
?>