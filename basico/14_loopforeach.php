<?php
     $cidades = array("Marília","Guarulhos","Lins","Bauru","São Paulo");
?>


<!DOCTYPE html>
<html Lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Lista de Cidades</title>
</head>

<body>

    <h1>Lista de Cidades</h1>

    <hr>
    <br>

    <?php
        foreach($cidades as $cidade)
            {
                echo"$cidade<br>";
            }

     ?>
</body>
</html>