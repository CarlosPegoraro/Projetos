<html>
<head>
        <meta charset="UTF-8">
        <title>Sequenciador</title>
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
            margin: 6% 20%;
            background-color: white;
            text-align: center;
        }
        </style>
    </head>
    <body>
        <form method="post" action="">
            <p class="fonte36 laranja negrito arial">Sequencia --> Termos</p>
            <p class="fonte20 branco arial">
                Primeiro termo: <input type="text" name="numa">⠀⠀
                Razao: <input type="text" name="numb"><br>
                <br>
                Termo à encontrar: <input type="text" name="numc">⠀⠀
                Numero de termos: <input type="text" name="numd">⠀<br>⠀
                <p class="fonte24 laranja negrito arial">Sequencia -> Formula do termo geral</p>
                <div class="box24fontebranco">
                    <input type="radio" name="sequencia" value="paf">Pa
                    <input type="radio" name="sequencia" value="pgf">Pg
                </div>
                <p class="fonte24 laranja negrito arial">Sequencia -> Soma</p>
                <div class="box24fontebranco">
                    <input type="radio" name="sequencia" value="pas">Pa
                    <input type="radio" name="sequencia" value="pgs">Pg
                    <input type="radio" name="sequencia" value="pgsi">Pg infinita
                </div>
                <br> <br>
                <input class="fonte14 laranjacoral arial" type="submit" value="Calcular">
        </form>
        <?php
            if($_POST)
            {
                require_once 'funcoes/funcoes.php';
                $sequencia = $_POST['sequencia'];

                switch($sequencia)
                {
                    case 'paf':
                        $a1 = $_POST['numa'];
                        $r = $_POST['numb'];
                        $n = $_POST['numc'];
                        formulageralPa($a1, $r, $n);
                        break;

                    case 'pgf':
                        $a1 = $_POST['numa'];
                        $r = $_POST['numb'];
                        $n = $_POST['numc'];
                        formulageralPg($a1, $r, $n); 
                        break;

                    case 'pas':
                        $a1 = $_POST['numa'];
                        $r = $_POST['numb'];
                        $n = $_POST['numd'];
                        somaPa($a1, $r, $n);
                        break;

                    case 'pgs':
                        $a1 = $_POST['numa'];
                        $r = $_POST['numb'];
                        $n = $_POST['numd'];
                        somaPg($a1, $r, $n);
                        break;

                    case 'pgsi':
                        $a1 = $_POST['numa'];
                        $r = $_POST['numb'];
                        somaInfinita($a1, $r);
                        break;

                    default:
                        echo "Escolha uma sequencia";
                }
            }
        ?>
        </p>
        <br>
        <a class="fonte18 laranjacoral arial" href="/index.php">Deslogar</a>
    </body>
</html>