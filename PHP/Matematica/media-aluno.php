<html>
    <head>
        <meta charset="UTF-8">
        <title>Media do Aluno</title>
        <link href="/css/cores.css" rel="stylesheet">
        <link href="/css/corpo.css" rel="stylesheet">
        <link href="/css/est_fontes.css" rel="stylesheet">
        <link href="/css/fontes.css" rel="stylesheet">
        <link href="/css/tam_fontes.css" rel="stylesheet">
        <style>
            body {
                background-color: #51B7DE;
                margin: 2cm;
                text-align: center;
                padding: 1cm;
            }
        </style>
    <body>
        <h1 class="fonte36 impact preto"> Media do Aluno </h1>
            <form method="post" action="media-aluno.php">
                <h3 class="fonte18 ariel preto">Primeira Nota: </h3><input class="fonte16 verde" type="number" name="numa"> <br>
                <h3 class="fonte18 ariel preto">Segunda Nota: </h3><input class="fonte16 verde" type="number" name="numb"> <br>
                <h3 class="fonte18 ariel preto">Terceira nota: </h3><input class="fonte16 verde" type="number" name="numc"> <br>
                <br>
                <input class="fonte16" type="submit" value="Calcular A Media">

            <h3 class="fonte20"><?php
            if ($_POST) 
            {
                $a = $_POST['numa'];
                $b = $_POST['numb'];
                $c = $_POST['numc'];

                $soma = $a + $b + $c;
                $media = round($soma / 3);

                if ($media >= 6) {
                    echo "<p> O aluno foi aprovado com media $media!</p>";
                } else {
                    echo "<p> O aluno foi reprovado com media $media!</p>";
                }
            } else {
                echo "Selecione algum valor acima";
            }
            ?></h3>
            <h2 class="fonte20 preto arial">Link para voltar para o index:</h2>
            <a href="/index.html"><h3>Clique Aqui</h3></a>
    </body>
</html>
