<!DOCTYPE HTML>
<html lang = "pt-br">
   <head>
      <title>Calculadora</title>
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
         <form action="" method="post" >
            <p class="fonte36 lucidasans negrito oceano">Calculadora</p>
            <div class="centralizartextodireita">
               <p class="fonte20 lucidasans negrito cinzaclaro">
                  Primeiro Numero ou raiz: <input class="fonte16 oceano negrito times" name="num1" type="number"><br>
                  <br>
                  Segundo numero: <input class="fonte16 oceano negrito times" name="num2" type="number"><br>
                  <br>
               </p>
            </div>
            <div class="centralizartexto">
               <p class="fonte20 lucidasans negrito cinzaclaro">
                  <input type="radio" name="operacao" value="+">Adição   
                  <input type="radio" name="operacao" value="-">Subtração    
                  <input type="radio" name="operacao" value="*">Multiplicação  
                  <input type="radio" name="operacao" value="/">Divisão<br>
                  <br>
                  <input type="radio" name="operacao" value="**">Potencialização
                  <input type="radio" name="operacao" value="raiz">Raiz Quadrada
                  <input type="radio" name="operacao" value="pi">PI<br>
               </p>
            </div>
            <input class="fonte14 oceano trebuchet" type="submit" value="Calcular">
            </p>
         </form>
         <p class="fonte18 oceano arial">
         <?php

         if($_POST)
         {

            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $op = $_POST['operacao'];

            switch ($op) 
            {
               case '+':
                  $calcular = $a + $b;
                  echo "Resultado da Adição é: $calcular";
                  break;
               
               case '-':
                  $calcular = $a - $b;
                  echo "Resultado da Subtração é: $calcular";
                  break;

               case '*':
                  $calcular = $a * $b;
                  echo "Resultado da Multiplicação é: $calcular";
                  break;
               
               case '/':
                  $calcular = $a / $b;
                  echo "Resultado da Divisão é: $calcular";
                  break;

               case '**':
                  $calcular = $a ** $b;
                  echo "Resultado da Potencialização é: $calcular";
                  break;

               case 'raiz':
                  $calcular = round(sqrt($a), 2);
                  echo "Resultado da raiz é: $calcular";
                  break;

               case 'pi':
                  $calcular = 3.14;
                  echo "Resultado de pi é: $calcular";
                  break;
               
               default:
                  echo "Selecione alguma opção";
                  break;     
            }
         }
         ?>
         </p>
         <p class="fonte20 cinzaclaro arial">Link para voltar para o index:</p>
         <a class="fonte16 oceano arial" href="/projetos/hub.php">Clique Aqui</a>
   </body>
</html>