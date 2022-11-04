<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Baskara</title>
        <meta charset = "UTF-8">
        <link href="css/cores.css" rel="stylesheet">
        <link href="css/corpo.css" rel="stylesheet">
        <link href="css/corpo2.css" rel="stylesheet">
        <link href="css/est_fontes.css" rel="stylesheet">
        <link href="css/fontes.css" rel="stylesheet">
        <link href="css/tam_fontes.css" rel="stylesheet">
        <link href="css/box.css" rel="stylesheet">
        <link rel="sortcut icon" href="css/imagens/ivonecalculadora.png" type="image/x-icon" />
      <style>
         body {
            background-color: white;
            margin: 6% 20%;
            text-align: center;
         }
      </style>
    </head>
        <body>
            <p class="fonte36 verdeloud impact">Baskara</p>
                <form method="post" action="">
                    <p class="fonte18 branco arial">
                        Valor de A: <input class="fonte12 trebuchet verde" type="number" name="txta"> <br>
                        Valor de B: <input class="fonte12 trebuchet verde" type="number" name="txtb"> <br>
                        Valor de C: <input class="fonte12 trebuchet verde" type="number" name="txtc"> <br>
                        <br>
                    <input class="fonte16 cinza" type="submit" value="Calcular">
                    </p>
                </form>
                <p class="fonte18 trebuchet branco"> Resultado: </p>
                @php
                    if ($_POST) 
                    {
                        $a = $_POST['txta'];
                        $b = $_POST['txtb'];
                        $c = $_POST['txtc'];

                        $delta = ($b ** 2) - (4 * $a * $c);

                        $x1 = (-$b + sqrt($delta)) / (2 * $a);
                        $x2 = (-$b - sqrt($delta)) / (2 * $a);

                        $Xv = -$b / (2 * $a);
                        $Yv = -$delta / (4 * $a);

                        echo "<p class='fonte16 verdeloud negrito arial'>Na equação: $a" . "x² $b" . "x $c = 0, retira-se as seguintes informações:</p>";

                        if ($delta < 0) {
                            echo "<p class='fonte16 verdeloud negrito arial'>Delta é negativo, com valor = $delta, X1 = $x1, X2 = $x2</p>";
                        } else {
                            echo "<p class='fonte16 verdeloud negrito arial'>Delta = $delta/ X1 = $x1/ X2 = $x2</p>";
                        }

                        if ($a > 0) {
                            echo "<p class='fonte16 verdeloud negrito arial'>Parabola tem boca para cima e ponto minimo</p>";
                        } else {
                            echo "<p class='fonte16 verdeloud negrito arial'>Parabola tem boca para baixo e ponto maximo</p>";
                        }

                        echo "<p class='fonte16 verdeloud negrito arial'>Xv = $Xv/ Yv = $Yv</p>";

                    } else {
                        echo "<p class='fonte16 verdeloud negrito arial'>Selecione algum número</p>";
                    }
                @endphp
                <br>
                <p class="fonte20 branco arial">Link para voltar para o index:</p>
                <a class="fonte16 verdeloud negrito arial" href="/projetos/hub.php">Voltar</a>
        </body>
</html>
