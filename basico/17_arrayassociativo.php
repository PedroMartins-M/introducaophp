<?php
    $alunos = [
        'nome' => "Pedro",
        'idade' => 18,
        'cidade' => "Marília",
        'ativo' => true
    ];
?>


<!DOCTYPE html>
<html Lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Lista de Alunos</title>
</head>

<body>

    <h1>Lista de Alunos</h1>

    <hr>
    <br>

    <?php
    if($alunos['ativo'])
    {
        echo "Nome: $alunos[nome] <br> Idade: $alunos[idade] <br> Cidade: $alunos[cidade].<br>";
    }
    ?>
</body>
</html>