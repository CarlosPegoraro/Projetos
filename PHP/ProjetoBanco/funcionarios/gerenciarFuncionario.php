<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/stylesClientes.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="">
        <fieldset><legend>Gerenciar Funcionários</legend>
            Usuario: <input type="text" name="nome" placeholder="Código de usuario"/><br>
            <br/>
            Senha: <input type="password" name="senha"/><br/>
            <br/>
            Definir Cargo: <input type="text" name="cargo"/><br/>
            <br/>
            <label>Criar<input type="radio" name="acao" value="cadastrar" checked="checked"/></label>
            <label>Apagar<input type="radio" name="acao" value="deletar"/></label><br/>
            <br/>
            <input  type="submit" value="Gerenciar"/><br/>
            <br>
            <a href="administrar.php">Voltar a página de inicial de funcoes</a>
            <?php

                require_once '../php/src/classes/funcionarios/GerenciarFuncionario.php';

                if ($_POST) {

                    $nome = $_POST['nome'];
                    $senha = $_POST['senha'];
                    $cargo = $_POST['cargo'];
                    $acao = $_POST['acao'];

                    $registro = new GerenciarFuncionario($nome, $senha, $cargo, $acao);
                    $registro->gerenciar();
                }
            ?>
        </fieldset>
    </form>
</body>
</html>