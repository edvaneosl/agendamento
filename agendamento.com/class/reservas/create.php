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


/*clear
function clear($input) {
	global $connect;
	//sql
	$var = mysqli_escape_string($connect, $input);
	//xss
	$var = htmlspecialchars($var);
	return $var;
}*/

// CADASTRO PELO FUNCIONÁRIO
$objEvents=new ClassEvents();
if(isset($_POST['btn-cadastrar'])):

	$solicitante = 'funcionario';

	//atribuições
	$nome = addslashes($_POST['nome']);
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$data = addslashes($_POST['date']);
	$hora = addslashes($_POST['hora']);
	$servico = addslashes($_POST['servico']);
	 //conversão da datetime
	$start = new \DateTime($data.' '.$hora, new \DateTimeZone('America/Sao_Paulo'));
	$duracao = 20;
	$title = 'agendado';
	$description = 'Agendamento feito pelo gerente.';

	//passando parametros
	$objEvents->createEvent(
	0,
	$nome,	
    $telefone,
    $email,
    $start->format("Y-m-d H:i:s"),
    $start->modify('+'.$duracao.'minutes')->format("Y-m-d H:i:s"),
    $servico,
    $title,
    $description,
    'blue',
	);

	/*email
	$subject = 'Novo agendamento';
	$headers = "Content-Type: text/plain;charset=utf-8\r\n";
	$headers .= "From: $email\r\n";
	$headers .= "Reply-To: $email\r\n";
	// Dados que serão enviados
	$corpo = "Formulário da página de Orçamento\r\n";
	$corpo .= "Nome: " . $name . "\r\n";
	$corpo .= "Email: " . $email . "\r\n";
	$corpo .= "Data: " . $start . "\r\n";
	$corpo .= "Serviço: " . $servico . "\r\n";
	// Email que receberá a mensagem (Não se esqueça de substituir)
	$email_to = 'contato@devlight.com.br';
	// Enviando email
	$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);*/

	$_SESSION['mensagem'] = "Reserva cadastrada com sucesso!
			 <br> Nome: ".$nome."
			 <br> Telefone: ".$telefone."
			 <br> Solicitação feita pelo: ".$solicitante."
			 <br><br>Uma confirmação foi enviada para: ".$email.

		header('Location: ../funcionario/resp_funcionario.php?status=sucesso');


// CADASTRO PELO USUARIO
elseif (isset($_POST['btn-cadastrar-res'])):

	//atribuições
	$nome = addslashes($_POST['nome']);
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$data = addslashes($_POST['date']);
	$hora = addslashes($_POST['hora']);
	$servico = addslashes($_POST['servico']);
	 //conversão da datetime
	$start = new \DateTime($data.' '.$hora, new \DateTimeZone('America/Sao_Paulo'));
	$duracao = 20;
	$title = 'agendado';
	$description = 'Agendamento feito pelo usuario.';

	//passando parametros
	$objEvents->createEvent(
	0,
	$nome,	
    $telefone,
    $email,
    $start->format("Y-m-d H:i:s"),
    $start->modify('+'.$duracao.'minutes')->format("Y-m-d H:i:s"),
    $servico,
    $title,
    $description,
    'blue',
	);

	/*email
	$subject = 'Novo agendamento';
	$headers = "Content-Type: text/plain;charset=utf-8\r\n";
	$headers .= "From: $email\r\n";
	$headers .= "Reply-To: $email\r\n";
	// Dados que serão enviados
	$corpo = "Formulário da página de Orçamento\r\n";
	$corpo .= "Nome: " . $name . "\r\n";
	$corpo .= "Email: " . $email . "\r\n";
	$corpo .= "Data: " . $start . "\r\n";
	$corpo .= "Serviço: " . $servico . "\r\n";
	// Email que receberá a mensagem (Não se esqueça de substituir)
	$email_to = 'contato@devlight.com.br';
	// Enviando email
	$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);*/


	$_SESSION['mensagem'] = "
			 <br> Olá, ".$nome."
			 <br> Reserva cadastrada com sucesso!
			 <br> Data: ".$data."
			 <br> Horário: ".$hora."
			 <br><br>Uma confirmação foi enviada para: ".$email.

		header('Location: resposta.php?status=sucesso');

// CADASTRO DE DIAS OFF

elseif (isset($_POST['btn-off-dia'])):

	//atribuições
	$nome = 'dia off';
	$telefone = '00';
	$email = 'contato@devlight.com.br';
	$data = addslashes($_POST['date']);
	$hora = '08:00:00';
	$servico = 'nenhum';
	 //conversão da datetime
	$start = new \DateTime($data.' '.$hora, new \DateTimeZone('America/Sao_Paulo'));
	$end;

	$title = 'Day off';
	$description = 'Agendamento feito pelo usuario.';

	//passando parametros
	$objEvents->createEvent(
	0,
	$nome,	
    $telefone,
    $email,
    $start->format("Y-m-d H:i:s"),
    $start->modify('+ 9 hours')->format("Y-m-d H:i:s"),
    $servico,
    $title,
    $description,
    'green',
	);

	/*email
	$subject = 'Novo agendamento';
	$headers = "Content-Type: text/plain;charset=utf-8\r\n";
	$headers .= "From: $email\r\n";
	$headers .= "Reply-To: $email\r\n";
	// Dados que serão enviados
	$corpo = "Formulário da página de Orçamento\r\n";
	$corpo .= "Nome: " . $name . "\r\n";
	$corpo .= "Email: " . $email . "\r\n";
	$corpo .= "Data: " . $start . "\r\n";
	$corpo .= "Serviço: " . $servico . "\r\n";
	// Email que receberá a mensagem (Não se esqueça de substituir)
	$email_to = 'contato@devlight.com.br';
	// Enviando email
	$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);*/


	$_SESSION['mensagem'] = "
			 <br> Day-off cadastrado com sucesso!
			 <br> Data: ".$data."
			 <br> Horário: ".$hora."
			 <br><br>Uma confirmação foi enviada para: ".$email.

		header('Location: resposta.php?status=sucesso');


endif;

