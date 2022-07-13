<?php 


//config
include('../../config/config.php');
//conexao
require_once '../../connect/db_connect_res.php';
//calendario
include_once 'calendario.php';

// Sessão
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }


$objEvents=new ClassEvents();

if(isset($_POST['btn-editar'])):

	$id=filter_input(INPUT_POST,'id',FILTER_DEFAULT);
	$nome=filter_input(INPUT_POST,'nome',FILTER_DEFAULT);
	$telefone=filter_input(INPUT_POST,'telefone',FILTER_DEFAULT);
	$email=filter_input(INPUT_POST,'email',FILTER_DEFAULT);
	$data=filter_input(INPUT_POST,'date',FILTER_DEFAULT);
	$hora=filter_input(INPUT_POST,'hora',FILTER_DEFAULT);
	$start=new \DateTime($data.' '.$hora, new \DateTimeZone('America/Sao_Paulo'));
	$servico=filter_input(INPUT_POST,'servico',FILTER_DEFAULT);
	$title='agendado';
	$description='modificado';
	
	$objEvents->updateEvent(
	    $id,
		$nome,	
	    $telefone,
	    $email,
	    $start->format("Y-m-d H:i:s"),
	    $start->modify('+'.$servico.'minutes')->format("Y-m-d H:i:s"),
	    $servico,
	    $title,
	    $description,
	    'orange',
	);

		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../funcionario/resp_funcionario.php?status=sucesso');



endif;
