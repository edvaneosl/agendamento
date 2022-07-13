<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("<script>alert('Você não pode acessar esta página porque não está logado.');</script><a href=\"login.php\">Voltar para a tela de login</a>");
}
