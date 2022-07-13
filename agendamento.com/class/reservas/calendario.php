<?php
//conexao
require_once '../../connect/db_connect_res.php';
?>  

<?php

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

        class ClassEvents extends ModelConect
        {
            #Trazer os dados de eventos do banco
            public function getEvents()
            {
                $b=$this->conectDB()->prepare("SELECT * FROM events");
                $b->execute();
                $e=$b->fetchAll(\PDO::FETCH_ASSOC);
                return json_encode($e);
            }

            #Criação da consulta no banco
            public function createEvent($id,$nome,$telefone,$email,$start,$end,$servico,$title,$description,$color)
            {
                $b=$this->conectDB()->prepare("insert into events values (?,?,?,?,?,?,?,?,?,?)");
                $b->bindParam(1, $id, \PDO::PARAM_INT);
                $b->bindParam(2, $nome, \PDO::PARAM_STR);
                $b->bindParam(3, $telefone, \PDO::PARAM_STR);
                $b->bindParam(4, $email, \PDO::PARAM_STR);
                $b->bindParam(5, $start, \PDO::PARAM_STR);
                $b->bindParam(6, $end, \PDO::PARAM_STR);
                $b->bindParam(7, $servico, \PDO::PARAM_STR);
                $b->bindParam(8, $title, \PDO::PARAM_STR);
                $b->bindParam(9, $description, \PDO::PARAM_STR);
                $b->bindParam(10, $color, \PDO::PARAM_STR);
                $b->execute();
            }

            #Buscar eventos pelo id
            public function getEventsById($id)
            {
                $b=$this->conectDB()->prepare("select * from events where id=?");
                $b->bindParam(1, $id, \PDO::PARAM_INT);
                $b->execute();
                return $e=$b->fetch(\PDO::FETCH_ASSOC);
            }


            #Update no banco de dados
            public function updateEvent($id,$nome,$telefone,$email,$start,$end,$servico,$title,$description,$color)
            {
                $b=$this->conectDB()->prepare("update events set nome=?, telefone=?, email=?, start=?, end=?, servico=?, title=?, description=?, color=? where id=?");
                $b->bindParam(1, $nome, \PDO::PARAM_STR);
                $b->bindParam(2, $telefone, \PDO::PARAM_STR);
                $b->bindParam(3, $email, \PDO::PARAM_STR);
                $b->bindParam(4, $start, \PDO::PARAM_STR);
                $b->bindParam(5, $end, \PDO::PARAM_STR);
                $b->bindParam(6, $servico, \PDO::PARAM_STR);
                $b->bindParam(7, $title, \PDO::PARAM_STR);
                $b->bindParam(8, $description, \PDO::PARAM_STR);
                $b->bindParam(9, $color, \PDO::PARAM_STR);
                $b->bindParam(10, $id, \PDO::PARAM_INT);
                $b->execute();
            }

            #Deletar no banco de dados
            public function deleteEvent($id)
            {
                $b=$this->conectDB()->prepare("delete from events where id=?");
                $b->bindParam(1, $id, \PDO::PARAM_INT);
                $b->execute();
            }

            /*
            #Deletar no banco de dados automaticamente
            public function getEventsBydate()
            {   
                //1.pegar evento pela data menor que hoje
                $hoje=date("Y-m-d H:i:s");
                $b=$this->conectDB()->prepare("select * from events where start<$hoje");
                $b->execute();
                return $e=$b->fetch(\PDO::FETCH_ASSOC);
            }

            public function deleteAuto()
            {   
                //2.passar para delete event com id

                $b=$this->conectDB()->prepare("delete from events where id=$id");
                $b->bindParam(1, $id, \PDO::PARAM_INT);
                $b->execute();
            }*/


        }



        
?>