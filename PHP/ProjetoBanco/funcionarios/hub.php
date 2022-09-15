<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/stylesFuncionarios.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body class="adm">
    <form method="POST" action="">
        <fieldset class="adm"><legend>Área de Trabalho</legend>
            Usuario: <input type="text" name="user" placeholder="Código de usuario"/>
            Senha: <input type="password" name="senha"/><br/>
            <br/>
            <input type="submit" value="Gerenciar"/><br/>
            <br/>
            <a href="../index.php">Voltar a página de inicial</a><br/>
        </fieldset>
    </form>
    <?php

        require_once '../php/src/classes/funcionarios/Conferir.php';

        if ($_POST) {

            $user = $_POST['user'];
            $senha = $_POST['senha'];

            $conferir = new Conferir ($user, $senha);
            $conferir->conferirCargo();
        }              
        ?>
</body>
</html>