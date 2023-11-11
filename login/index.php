
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Provas/style2.css">
</head>
<body>
    <form action="" method="POST">
        <h1>Acesse sua conta</h1>

        <?php if(isset($erro_email)) { ?>
            <div class="error-message"><?php echo $erro_email; ?></div>
        <?php } ?>

        <?php if(isset($erro_senha)) { ?>
            <div class="error-message"><?php echo $erro_senha; ?></div>
        <?php } ?>

        <?php if(isset($erro_login)) { ?>
            <div class="error-message"><?php echo $erro_login; ?></div>
        <?php } ?>

        <p>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>

<?php
include('conexao.php');

$erro_email = $erro_senha = $erro_login = "";

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        $erro_email = "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        $erro_senha = "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            $erro_login = "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

