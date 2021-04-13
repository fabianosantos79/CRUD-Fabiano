<?php
    require_once('config.php');
    require_once('dao/UsuarioDao.php');

    $usuarioDao = new UsuarioDao($pdo);
    $lista = $usuarioDao->findAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Crud Fabiano</title>
    
</head>
<body>
    
    <div class="container">
        <br>
        <h2>Lista de Usuários</h2>
        <br>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach($lista as $usuario): ?>
                    <tr>
                    <th scope="row"><?= $usuario->getId() ?></th>
                    <td><?= $usuario->getNome() ?></td>
                    <td><?= $usuario->getEmail() ?></td>
                    <td>
                        <a href="editar.php?id=<?= $usuario->getId(); ?>">Editar</a>   
                        <a href="deletar.php?id=<?= $usuario->getId(); ?>" onclick="return confirm('Deseja excluir esse usuário?')">Deletar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
        <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>


    </div>

    <?php        
        
    ?>
    

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>