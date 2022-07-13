

<!-- RODAPÉ -->

    <section>
    <footer class="page-footer blue2">
          <div class="container">
            <div class="row">

              <div class="col s6 container">
                <h5 class="white-text">Siga-nos nas redes</h5>
                <p class="black-text text-lighten-4">Fique por dentro de todas as novidades e compartilhe com seus amigos!</p>
              </div>
              <div class="col s6 container">
                <h5 class="white-text">Menu</h5>
                <ul>
                  <li><a href="<?php echo DIRPAGE.'index.php' ;?>" style="color:darkorange">Home</a></li>
                  <li><a href="<?php echo DIRPAGE.'contato.php' ;?>">Contato e Informações</a></li>
                  <li><a href="<?php echo DIRPAGE.'servicos.php' ;?>">Serviços</a></li>
                  <li><a href="<?php echo DIRPAGE.'class/funcionario/login.php' ;?>" style="color:darkgreen;">Gerenciamento</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="footer-copyright">
            <div class="container">
            © 2022- Todos os direitos reservados
            <a class="grey-text text-lighten-4 right" href="#!">Mais Links</a>
            </div>
          </div>

        </footer>
      </section>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- MATERIALIZE JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- FULL CALENDAR -->
    <script src="<?php echo DIRPAGE.'lib/js/FullCalendar/main.js'; ?>"></script>
    <!-- JS FULL CALENDAR -->
    <script src="<?php echo DIRPAGE.'lib/js/FullCalendar/javascript.js'; ?>"></script>
    <!-- SWEET ALERT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- JAVASCRIPT -->
    <script>
      //INICIALIZAÇÃO
      $(document).ready(function(){

        // MENU MOBILE
          $(".sidenav").sidenav();
        // LINK INTERNO
          $(".scrollspy").scrollSpy({
            scrollOffset: 0
          });
        //PROCEDIMENTOS
          $('.materialboxed').materialbox();

        // MODAL
          $('.modal').modal();
          
        //TABS
          $('.tabs').tabs();

        // FORMULÁRIO
          M.updateTextFields();

          $('input#input_text, textarea#textarea2').characterCounter();
        //TOAST
        
        //SELECT
          $('select').formSelect();

        //DATEPICKER
          $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            autoClose: true,
            disableWeekends: true,
            minDate  : new Date(),
            i18n: {
              cancel: 'Cancelar',
              clear: 'Limpar',
              done: 'Ok',
              previousMonth: '‹',
              nextMonth: '›',
              months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
              monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
              weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
              weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
              weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S']
            },
            disableDayFn: function(date) {
              <?php $dia='ocupado' ?>
              <?php $dateoff = '2022,03,07';?>
              <?php if ($dia = 'ocupado'): ?>

                let disableListDate = [new Date('<?php echo $dateoff;?>').toDateString()];

                if(disableListDate.includes(date.toDateString())) {
                    return true
                }else{
                    return false
                }
                
              <?php endif ?>
              
            }

          });

          $('.timepicker').timepicker({
            autoClose: true,
            twelveHour: false,
            defaultTime: '08:00',
            i18n: {
              cancel: 'Cancelar',
              clear: 'Limpar',
              done: 'Ok'
            },
          });
            


           });


      //ADICIONANDO NAVCOLOR
      $(window).on("scroll", function(){
          if($(window).scrollTop() >100){
              $(".navbar").addClass("nav-color");
          } else{
              $(".navbar").removeClass("nav-color");
          }
      });
    </script>

      </body>

</html