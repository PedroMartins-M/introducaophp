<?php
     $nomes = array("Ana","Carlos","Maria");
?>


<!DOCTYPE html>
<html Lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Lista de Nomes</title>
</head>

<body>

    <h1>Lista de Nomes</h1>

    <hr>
    <br>

    <?php
        foreach($nomes as $nome)
            {
                echo"$nome<br>";
            }

            for($i = 0; $i < count($nomes); $i++)
            {
                echo"$nomes[$i] <br>";
            }
     ?>
</body>
</html>