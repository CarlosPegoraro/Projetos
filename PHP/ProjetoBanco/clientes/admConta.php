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
            Numero da Conta: <input class="adm" type="text" name="num"/>
            Senha de Confirmação: <input class="adm" type="password" name="senha"/><br/>
            Valor para deposito ou saque <input type="number" name="valor"/><br/>
            <br/>
            <label><input type="radio" name="acao" value="extrato" checked="checked"/>VER EXTRATO</label>
            <label><input type="radio" name="acao" value="depositar"/>DEPOSITAR/RECEBER</label>
            <label><input type="radio" name="acao" value="sacar"/></label>SACAR/PAGAR<br/>
            <br/>
            <input type="submit" value="Efetuar"/><br/>
            <br/>
            <a href="hub.php">Voltar a página de inicial de clientes</a><br/>
            Extrato da conta:
            <div class="extrato">
                <?php

                require_once '../php/src/classes/consulta/ConsultarConta.php';
                require_once '../php/src/classes/administracao/ExibirExtrato.php';
                require_once '../php/src/classes/administracao/RealizarDeposito.php';
                require_once '../php/src/classes/administracao/RealizarSaque.php';

                if ($_POST) {

                    $num = $_POST['num'];
                    $senha = $_POST['senha'];

                    $consulta = new ConsultarConta($num, $senha);
                    $consulta->consultar();

                    $valor = $_POST['valor'];
                    $acao = $_POST['acao'];
                    switch ($acao) {
                        case 'extrato':
                            $extrato = new ExibirExtrato($num);
                            $extrato->extrato();
                            break;
                        
                        case 'depositar':
                            $deposito = new RealizarDeposito($num, $valor);
                            $deposito->depositar();
                            break;

                        case 'sacar':
                            $saque = new RealizarSacar($num, $valor);
                            $saque->sacar();
                            break;
                        
                        default:
                            echo "Selecione uma opção";
                            break;
                    }
                }
                ?>
            </div>
        </fieldset>
    </form>
</body>
</html>