<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                <div class="card-body">
                    <h2>Acesso restrito</h2>
                <form action="login.php" method="$_POST">
                    <div>
                        <div class="mb-3">
                            <label>Usuário</label>
                            <input type="text" name="usuario" class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                        <label>Senha</label>
                        <input type="password" name="senha" class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Enviar</button>
              
                        </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>