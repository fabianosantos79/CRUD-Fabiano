
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

    <br><br><br><br>
        <div class="row align-middle">
            <div class="col-4"></div>
            <div class="col-8">
            <h3>Faça seu cadastro!</h3>
            <br>
            <form action="cadastrar_action.php" method="POST">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Nome" name="nome" aria-label="nome">
                </div><br>
                <div class="col-6">
                    <input type="email" class="form-control" placeholder="E-mail" name="email" aria-label="email">
                </div><br>
                <div class="col-6">
                    <button type="submit" name="btn-entrar" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <?php        
        
    ?>
    

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>