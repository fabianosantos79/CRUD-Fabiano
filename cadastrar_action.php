<?php
    require_once('config.php');
    require_once('dao/UsuarioDao.php');

    $usuarioDao = new UsuarioDao($pdo);

    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    
    if(!empty($nome) && !empty($email) ){
        
        if($usuarioDao->findByEmail($email) === false){
            $novoUsuario = new Usuario();
            $novoUsuario->setNome($nome);
            $novoUsuario->setEmail($email);

            $usuarioDao->create($novoUsuario);

        }
    }
        
        header('Location:index.php');
        exit;

?>