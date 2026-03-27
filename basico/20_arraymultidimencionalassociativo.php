<?php
    $alunos = [

        [
        $nome => "Pedro",
        $idade => 18,
        $cidade => "Marília",
        $ativo => true
        ],

    [
        $nome => "Maria",
        $idade => 20,
        $cidade => "São Paulo",
        $ativo => true

    ],

    [
        $nome => "Carlos",
        $idade => 22,
        $cidade => "Rio de Janeiro",
        $ativo => false
    ]
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
    for($i = 0; $i < count($alunos); $i++)
    {
        if($alunos[$i]['ativo'])
        {
            echo "Nome:" .$alunos[$i]['nome'],
            "Idade:" .$alunos[$i]['idade'],
            "Cidade:" .$alunos[$i]['cidade'];
        }
    }
    ?>
</body>
</html>