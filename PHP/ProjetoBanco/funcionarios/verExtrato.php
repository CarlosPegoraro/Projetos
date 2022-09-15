<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/stylesClientes.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body class="adm">
    <form method="POST" action="">
        <fieldset class="adm"><legend>ADM CONTA</legend>
            Numero da Conta: <input class="adm" type="text" name="num"/><br/>
            <br/>
            <input type="submit" value="Ver Extrato"/><br/>
            <br/>
            <a href="hub.php">Voltar a página de inicial de funcionarios</a><br/>
            Extrato da conta:
            <div class="extrato">
                <?php

                require_once '../php/src/classes//funcionarios/Extrato.php';

                if ($_POST) {

                    $num = $_POST['num'];

                    $extrato = new Extrato($num);
                    $extrato->extrato();
                }
                ?>
            </div>
        </fieldset>
    </form>
</body>
</html>