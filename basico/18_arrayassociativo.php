<?php
    $produtos = [
        'nome' => "Panetone",
        'preco' => 20.00,
        'estoque' => 60,
        'disponivel' => true
    ];
?>


<!DOCTYPE html>
<html Lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Lista de Produtos</title>
</head>

<body>

    <h1>Lista de Produtos</h1>

    <hr>
    <br>

    <?php
    if($produtos['disponivel'])
    {
        echo "Nome: $produtos[nome] <br> Preço: R$ " . number_format($produtos['preco'], 2, ',', '.') . " <br> Estoque: $produtos[estoque] Unidades<br>";
    }
    ?>
</body>
</html>