<?php
    include_once("../config/connection.php");
    $stmt = $connect->prepare("DELETE FROM blog WHERE id=:ID");
    $id = $_GET['id'];
    $stmt->bindParam(":ID",$id);
    $stmt->execute();

    echo "Registo apagado";
?>