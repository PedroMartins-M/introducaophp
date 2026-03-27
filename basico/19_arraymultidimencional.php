<?php
    $alunos = [

        [
        "Pedro",
        18,
        "Marília",
        true
        ],

    [
        "Maria",
        20,
        "São Paulo",
        true

    ],

    [
        "Carlos",
        22,
        "Rio de Janeiro",
        false
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
        if($alunos[$i][3])
        {
            echo "Nome:" .$alunos[$i][0],
            "Idade:" .$alunos[$i][1],
            "Cidade:" .$alunos[$i][2];
        }
    }
    ?>
</body>
</html>