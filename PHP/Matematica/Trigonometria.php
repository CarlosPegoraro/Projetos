<!DOCTYPE HTML>
<html lang = "pt-br">
   <head>
      <title>Trigonometria</title>
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
      <p class="fonte36 lucidasans azulclaro">Trigonometria</p>
         <form action="" method="post">
            <div class="centralizartextodireita">
                <p class="fonte20 cinzaclaro arial">
                    hipoternusa(Seno e Cosseno): <input class="fonte16 azulclaro" name="num1" type="number"><br>
                    <br>Cat. Oposto(Seno e Tangente): <input class="fonte16 azulclaro" name="num2" type="number"><br>
                    <br>Cat. Adjacente(Cosseno e tangente): <input class="fonte16 azulclaro" name="num3" type="munber"><br>
                </p>
            </div>
            <div class="centralizartexto">
                <p class="fonte24 cinzaclaro arial">
                    <input type="radio" name="operacao" value="seno">Seno 
                    <input type="radio" name="operacao" value="cosseno">Cosseno  
                    <input type="radio" name="operacao" value="tangente">Tangente <br>
                </p>
            </div>
                <input class="fonte16 azulclaro negrito arial" type="submit" value="Calcular"> <br>
                <br>
        </form>
        <p class="fonte18 azulclaro negrito arial">
            Resultado:
        <?php

        if($_POST)
        {
            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $c = $_POST['num3'];
            $op = $_POST['operacao'];

            switch($op)
            {
                case 'seno':
                    $calcular = $b / $a;
                    echo "Valor do Seno é: $calcular";
                    break;

                case 'cosseno':
                    $calcular = $c / $a;
                    echo "Valor do Cosseno é: $calcular";
                    break;

                case 'tangente':
                    $calcular = $b / $c;
                    echo "Valor da tangente é: $calcular";
                    break;

                default:
                    echo "Selecione uma operação";
                    break;
            }
        }
        ?>
        </p>
        <p class="fonte20 cinzaclaro arial">Link para voltar para o index:</p>
        <a class="fonte16 azulclaro negrito arial" href="/projetos/hub.php">Clique Aqui</a>
    </body>
</html>