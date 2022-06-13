<?php
    include_once ("../config/connection.php");

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    //echo "$nome - $login - $senha";

   $stmt = $connect->prepare("INSERT INTO users (nome,login,senha) VALUES (:NOME, :LOGIN, :SENHA)");

   $stmt->bindParam(':NOME',$nome);
   $stmt->bindParam(':LOGIN',$login);
   $stmt->bindParam(':SENHA',$senha);

   $stmt->execute();

   header("location:cad_user.php");


?>