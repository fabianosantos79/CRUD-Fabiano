<?php
    require_once 'config.php';

    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');

    if($id && $nome && $email)
    {   
        $sql = $pdo->prepare("UPDATE usuarios SET nome = :n, email = :e WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':n', $nome);
        $sql->bindValue(':e', $email);
        $sql->execute();

        header('Location:index.php');
        exit;
    }
    else
    {
        header('Location:index.php');
        exit;
    }
?>