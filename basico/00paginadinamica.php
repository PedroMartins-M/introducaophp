<!DOCTYPE html>
<html Lang="pt-br">

<head>
    <meta charset"UTF-8">
    <tittle>Minha Página Dinamica</title>
</head>
<body>

    <p>
 
        Olá, Hoje é dia
         <?php
         echo date('d/m/Y'); 

         $teste = 1;

        echo '<p>A caixa da agua está vazia. \\ $teste';
        echo '<p>A caixa da agua está vazia. \\'.$teste;

        $litros = '1000L';
        echo "<br> A caixa d'agua é de $litros";

         ?>
    </p>
</body>

</html>