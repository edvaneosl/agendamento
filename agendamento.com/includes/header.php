<?php 
if(!isset($_SESSION)) {
  session_start();}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Agendamento</title>
      <link rel="icon" href="../lib/img/logo.jpg">


      <!--GOOGLE ICONS -->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--FONT AWESOME -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

      <!--FULL CALENDAR -->
      <link rel="stylesheet" href="<?php echo DIRPAGE.'/lib/js/FullCalendar/main.min.css' ;?>">

      <!-- MATERIALIZE CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">      
       <!-- CUSTOM CSS -->
      <link rel="stylesheet" href="<?php echo DIRPAGE.'css/styles.css' ;?>">
    </head>
    <body>


      <!-- HEADER -->

    <header>
      
      <!-- MENU MOBILE -->

          <ul class="sidenav light" id="menu-mobile">
            <li><a href="<?php echo DIRPAGE.'index.php' ;?>" style="color:skyblue">Home</a></li>
            <li><a href="<?php echo DIRPAGE.'contato.php' ;?>">Contato e Informações</a></li>
            <li><a href="<?php echo DIRPAGE.'servicos.php' ;?>">Serviços</a></li>
            <li><a href="<?php echo DIRPAGE.'class/funcionario/login.php' ;?>" style="color:darkorange;">Gerenciamento</a></li>
            <?php if(isset($_SESSION['id'])): {?> <li><a href="<?php echo DIRPAGE.'class/funcionario/logout.php' ;?>" style="color:white;">Sair</a></li><?php } endif; ?>
          </ul>

          </ul>

      <!-- BARRA DE NAVEGAÇÃO -->

      <div class="navbar-fixed">
      <nav class="navbar">
        <div class="nav-wrapper container">
          <h1 class="logo_text">Agende seu horário!</h1>
          
          <a href="#"><img class= "logo_img" src="<?php echo DIRPAGE.'lib/img/logo.jpg' ;?>" alt="lightdev" data-ll-status="loaded"></a>
          <ul class="right light hide-on-med-and-down ">
            <li><a href="<?php echo DIRPAGE.'index.php' ;?>" style="color:skyblue">Home</a></li>
            <li><a href="<?php echo DIRPAGE.'contato.php' ;?>">Contato e Informações</a></li>
            <li><a href="<?php echo DIRPAGE.'servicos.php' ;?>">Serviços</a></li>
            <li><a href="<?php echo DIRPAGE.'class/funcionario/login.php' ;?>" style="color:darkorange;">Gerenciamento</a></li>
            <?php if(isset($_SESSION['id'])): {?> <li><a href="<?php echo DIRPAGE.'class/funcionario/logout.php' ;?>" style="color:white;">Sair</a></li><?php } endif; ?>
          </ul>

          <a href="#" data-target="menu-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
        </div>
      </nav> 
      </div>
    </header>