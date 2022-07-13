<?php 
//config
include('../../config/config.php');
//conexao
require_once '../../connect/db_connect_res.php';


		#conexao db
        class ModelConect
        {
            public function conectDB()
            {
                try{
                    $con=new \PDO("mysql:host=localhost;dbname=reservas",'root','');
                    return $con;
                }catch (\PDOException $erro){
                    return $erro->getMessage();
                }
            }
        }

        class ClassUsers extends ModelConect
        {
		    public function createUser($nome,$sobrenome,$login,$senha)
		       {
		       	$b=$this->conectDB()->prepare("insert into usuarios (nome, sobrenome, login, senha) values (?,?,?,?)");
		                $b->bindParam(1, $nome, \PDO::PARAM_STR);
		                $b->bindParam(2, $sobrenome, \PDO::PARAM_STR);
		                $b->bindParam(3, $login, \PDO::PARAM_STR);
		                $b->bindParam(4, $senha, \PDO::PARAM_STR);
		        		$b->execute();
		        }
		    public function recoverPassword($login,$senha)
		       {
		       	$b=$this->conectDB()->prepare("update usuarios set senha=? where login=?");
		                $b->bindParam(1, $senha, \PDO::PARAM_STR);
		                $b->bindParam(2, $login, \PDO::PARAM_STR);
		        		$b->execute();
		        }

        }




// CADASTRO USUARIO
$objUser=new ClassUsers();
if(isset($_POST['btn-create-user'])):

	//atribuições
	$nome = addslashes($_POST['nome']);
	$sobrenome = addslashes($_POST['sobrenome']);
	$login = addslashes($_POST['login']);
	$senha = addslashes($_POST['senha']);

	//passando parametros
	$objUser->createUser(
	$nome,	
    $sobrenome,
    $login,
    $senha
	);

	if(!isset($_SESSION)):
		{
		session_start();
		}
	endif;

	$_SESSION['status-create'] = 'Cadastrado com sucesso!';

endif;

// RECUPERAR SENHA
$objPass=new ClassUsers();
if(isset($_POST['btn-pass-recover'])):

	//atribuições
	$login = addslashes($_POST['login']);
	$senha = addslashes($_POST['senha']);
	$senha2 = addslashes($_POST['senha2']);

	if ($senha==$senha2):
	{

	//passando parametros
	$objUser->recoverPassword(
    $login,
    $senha
	);

		if(!isset($_SESSION)):
		{
		session_start();
		}
		endif;

	$_SESSION['status-recover'] = 'Senha alterada com sucesso!';
		
	}
	else:
	{
	echo "<script>alert('Senhas diferentes.');</script>";

	}
	endif;


endif;
