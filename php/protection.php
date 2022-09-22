<?php
//Verifica se há um usuario logado na sessão, se nao, o-proibe de carregar pagina

    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['email'])){
        die("Você precisa estar logado para acessar essa página.");
    }
?>