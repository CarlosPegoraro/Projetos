<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="php/logar.php">
        <fieldset><legend>Login</legend>
            Usuario: <input class="text" type="text" name="user"/>
            Senha: <input class="text" type="password" name="senha"/><br/>
            <br/>
            <label>Cliente<input type="radio" name="tipo" value="clientes" checked="checked"/></label>
            <label>Funcionário<input type="radio" name="tipo" value="funcionarios"/></label><br/>
            <br>
            <input class="submit" type="submit" value="Logar"/><br/>
            <br>
            <a href="cadastro.php">Criar um Usuario</a>
        </fieldset>
    </form>
</body>
</html>