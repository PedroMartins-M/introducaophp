<!DOCTYPE html>
<html Lang="pt-br">
<head>
    <meta charset="UTF-8">
    <tittle> Mês </title>
</head>

<br>
<hr>

<body>
    <?php
        $mes = 3;
        switch($mes)
        {
            case 1:
                echo"Janeiro";
                break;
            case 2:
                echo"Fevereiro";
                break;
            case 3:
                echo"Março";
                break;
            default:
                echo"Mês inválido";
        }
    ?>
</body>
</html>