<?php
    $dbname = "crud_fabiano";
    $host = "localhost";
    $root = "root";
    $senha = "";

    try
    {
        $pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $root, $senha);
    }
    catch (PDOException $erro)
    {
        echo $mensagem = $erro->getMessage();
    }


?>