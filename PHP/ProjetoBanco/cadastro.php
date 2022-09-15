<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="php/cadastrar.php">
        <fieldset><legend>Cadastro</legend>
            Usuario: <input class="text" type="text" name="user" placeholder="CPF, CNPJ ou E-mail"/><br>
            <br/>
            Senha: <input class="text" type="password" name="senha"/><br/>
            <br/>
            Repitir Senha: <input class="text" type="password" name="senhaR"/><br/>
            <br/>
            <input class="submit" type="submit" value="Cadastrar"/><br/>
            <br>
            <a href="../index.php">Voltar a página de login</a>
        </fieldset>
    </form>
</body>
</html>