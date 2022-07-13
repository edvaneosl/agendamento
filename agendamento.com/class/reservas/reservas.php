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
	      

	    <!-- Grade de horarios disponiveis -->

	    <section id="disponiveis" class="home bloco scrollspy white">
	    	<h5 class="center light white-text blue_logo">Selecione a data e a hora do serviço</h5>
	    	<div class="calendarUser"></div>
	    	
	    </section>
	      
<?php include(DIRREQ."includes/footer.php"); ?>