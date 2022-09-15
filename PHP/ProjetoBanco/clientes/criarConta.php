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
        <fieldset><legend>Criar Conta</legend>
            Usuario: <input type="text" name="nome" placeholder="CPF, CNPJ ou E-mail"/><br>
            <br/>
            Senha: <input type="password" name="senha"/><br/>
            <br/>
            Tipo da conta: 
            <label>Corrente<input class="radio" type="radio" name="conta" value="corrente"/></label>
            <label>Poupança<input type="radio" name="conta" value="poupanca"/></label><br/>
            <br/>
            <input  type="submit" value="Cadastrar"/><br/>
            <br>
            <a href="hub.php">Voltar a página de inicial de clientes</a>
            <?php

                require_once '../php/src/classes/cadastros/CriarConta.php';

                if ($_POST) {

                    $nome = $_POST['nome'];
                    $senha = $_POST['senha'];
                    $tipo = $_POST['conta'];

                    $registro = new CriarConta($nome, $senha, $tipo);
                    $registro->criarConta();
                    echo "<br/>O número da sua conta é: " . $registro->getNumeroConta();
                }
            ?>
        </fieldset>
    </form>

    
</body>
</html>