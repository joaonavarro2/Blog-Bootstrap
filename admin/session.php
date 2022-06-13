<?php
    session_start();

    if(session_status() != PHP_SESSION_ACTIVE){
        session_cache_expire(60);
        session_start();
    }
    if($_SESSION['logado']!=true){
        header('location:index.php');
        die();
    }
    if(isset($_GET['sair'])){
        session_destroy();
        header('location:index.php');
        die();
    }
?>