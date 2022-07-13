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
	
	$id=filter_input(INPUT_GET,'id',FILTER_DEFAULT);
	$objEvents->deleteEvent($id);

	$_SESSION['mensagem'] = "Deletado com sucesso!";
	header('Location: ../funcionario/resp_funcionario.php');


