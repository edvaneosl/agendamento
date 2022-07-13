<?php
// conexão com o banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "reservas";

try {
  $connect = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
  // set the PDO error mode to exception
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
