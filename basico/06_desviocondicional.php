<?php
    $nota = 9.0;

    $mensagem = ($nota >= 6) ? "Aprovado" : "Reprovado";
?>

<!DOCTYPE html>
<html Lang="pt-br">
<head>
    <meta charset="UTF-8">
    <tittle> <h1>Situação do Aluno</h1></title>

    <hr>
</head>


<body>
    <?php
        echo"Nota do aluno: $nota <br>";
        echo "Situação: $mensagem";
    ?>
</body>
</html>