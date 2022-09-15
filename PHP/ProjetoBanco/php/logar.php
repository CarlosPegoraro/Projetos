<?php

    require_once 'src/classes/consulta/Logando.php';

    if ($_POST) {

        $user = $_POST['user'];
        $senha = $_POST['senha'];
        $tipo = $_POST['tipo'];

        $logar = new Logando($user, $senha, $tipo);
        $logar->logar();

        echo "Parece que voce digitou algo errado, <a href='../index.php'>clique aqui para voltar</a>";
    }

?>