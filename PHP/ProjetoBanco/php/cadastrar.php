<?php

    require_once 'src/classes/cadastros/CadastroCliente.php';

    if ($_POST) {

        $user = $_POST['user'];
        $senha = $_POST['senha'];
        $senhaR = $_POST['senhaR'];

        $registro = new CadastroCliente($user, $senha, $senhaR);
        $registro->insercao();

        header('Location: ../index.php');
        die();
    }

?>