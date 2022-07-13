<?php
include_once 'calendario.php';

$objEvents=new ClassEvents();
 echo $objEvents->getEvents();
?>